<?php
 
namespace App\Http\Controllers;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Http\Requests\PostRequest;
use App\User;
use App\Post;
use App\PostsPhoto;
use Image;
use App\Achievements\UserMadeAPost;
use App\Achievements\UserMade10Posts;
use App\Achievements\UserMade100Posts;
use App\Achievements\UserMade1000Posts;
 
class PostController extends Controller
{
    protected $postRepository;
 
    protected $nbrPerPage = 9;
 
    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth')->except('index', 'indexTag', 'show');
        $this->middleware('admin')->only('destroy');
 
        $this->postRepository = $postRepository;
    }
 
    public function index()
    {
        $posts = $this->postRepository->getWithUserAndTagsPaginate($this->nbrPerPage);
        $links = $posts->render();
        //$categories = Post::with(array('category'))->get();
        $users = Post::with(array('user'))->get();
 
        return view('artworks.liste', compact('posts', 'links', 'users'));
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
        foreach ($files as $file) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $img = Image::make($file)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $watermark = Image::make('storage/uploads/watermark.png');
            $img->insert($watermark, 'bottom-right', 15, 15);
            $img->save(public_path('storage/uploads/artworks/').$filename);
            PostsPhoto::create([
                'post_id' => $post->id,
                'filename' => $filename
            ]);
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

        return redirect(route('artworks.index'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        $photos = PostsPhoto::get();
        return view('artworks.artwork', compact('post', 'photos'));
    }
 
    public function destroy(Post $post)
    {
        $this->postRepository->destroy($post);
 
        return back();
    }
 
    public function indexTag($tag)
    {
        $posts = $this->postRepository->getWithUserAndTagsForTagPaginate($tag, $this->nbrPerPage);
        $links = $posts->render();
        return view('artworks.liste', compact('posts', 'links'))
            ->with('info', 'Résultats pour la recherche du mot-clé : ' . $tag);
    }

}