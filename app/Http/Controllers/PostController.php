<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Http\Requests\PostRequest;
use App\User;
use App\Post;
use App\Category;
use App\PostsPhoto;
use Image;
use Auth;
use App\Achievements\UserMadeAPost;
use App\Achievements\UserMade10Posts;
use App\Achievements\UserMade100Posts;
use App\Achievements\UserMade1000Posts;
use App\Achievements\UserEyesLynx;
use App\Achievements\UserModerator;
 
class PostController extends Controller
{
    protected $postRepository;
 
    protected $nbrPerPage = 20;
 
    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth')->except('index', 'indexTag', 'show', 'search');
       //$this->middleware('admin')->only('destroy');
 
        $this->postRepository = $postRepository;
    }
 
    public function index(Request $request)
    {
        $posts = $this->postRepository->getWithUserAndTagsPaginate($this->nbrPerPage);
        $categories = Category::all();
        $links = $posts->appends(request()->all())->render();     
        $users = Post::with(array('user'))->get();
        if ($request->ajax()){
            //$links = $posts->appends(request()->all())->render();
            return view('artworks.liste', compact('posts', 'users', 'links'));
        }
        return view('artworks.index', compact('posts', 'links', 'users', 'categories'));
    }
 
    public function create()
    {
        return view('artworks.create');
    }
 
    public function store(PostRequest $request, TagRepository $tagRepository)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);
        $post = $this->postRepository->store($inputs);
        
        $files = $request->file('photos');
        if($files) {
            foreach ($files as $file) {
                $filename = rand(0, 9999) . "_" . time() . '.' . $file->getClientOriginalExtension();
                $img = Image::make($file)->orientate();
                $img->resize(1000, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $watermark = Image::make('storage/uploads/watermark.png');
                $img->insert($watermark, 'bottom-left', 20, 20);
                $img->save(public_path('storage/uploads/artworks/').$filename);
                PostsPhoto::create([
                    'post_id' => $post->id,
                    'filename' => $filename
                ]);
            }
        }
        if(isset($inputs['tags'])) {
            $tagRepository->store($post, $inputs['tags']);
        }      
        // Gets the active user. Should come from session in a default app.
        $user = User::find($post->user_id);
        $user->unlock(new UserMadeAPost(), 1);
        $user->addProgress(new UserMade10Posts(), 1);
        $user->addProgress(new UserMade100Posts(), 1);
        $user->addProgress(new UserMade1000Posts(), 1);
        \Alert::success('Oeuvre créée!');
        return redirect(route('artworks.index'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('artworks.artwork', compact('post'));
    }

    public function revision(Request $request, $post)
    {
        $post = Post::findOrFail($post);
        $post->revision = true;
        $post->update();
        
        $user = Auth::user();
        $user->unlock(new UserEyesLynx());
        $user->addProgress(new UserModerator(), 1);
        \Alert::info('Oeuvre signalée, merci de votre attention')->autoclose(3000);
        return back();
    } 

    public function destroy($post)
    {
        $post = Post::find($post);
        $this->postRepository->destroy($post);
        \Alert::info('Oeuvre supprimée');
        return back();
    }

    public function search(Request $request)
    {
        $search = $request['searchCat'];
        $posts = Post::whereHas('category', function($query) use($search) {
            $query->where('category', 'like', '%'.$search.'%');
        })->orWhere('titre','LIKE','%'.$search.'%')
            ->orWhere('contenu', 'like','%'.$search.'%')
            ->orWhere('year', 'like','%'.$search.'%')
            ->orderBy('titre')
            ->paginate(20);
        if(count($posts) == 0) {
            \Alert::info('Aucun résultat pour : ' . $search);
          return redirect()->back();
        } 
        $links = $posts->appends(request()->all())->render();    
        return view('artworks.index', compact('posts', 'links'))
            ->with('info', 'Résultats pour la recherche du mot-clé : ' . $search);
    }
 
    public function indexTag($tag)
    {
        $posts = $this->postRepository->getWithUserAndTagsForTagPaginate($tag, $this->nbrPerPage);
        $links = $posts->render();
        return view('artworks.index', compact('posts', 'links'))
            ->with('info', 'Résultats pour la recherche du mot-clé : ' . $tag);
    }

}