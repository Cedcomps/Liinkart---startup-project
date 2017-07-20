<?php
 
namespace App\Http\Controllers;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Http\Requests\PostRequest;
use App\User;
use App\Post;
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
        $categories = Post::with(array('category'))->get();
        $users = Post::with(array('user'))->get();
 
        return view('artworks.liste', compact('posts', 'links', 'users', 'categories'));
    }
 
    public function create()
    {
        return view('artworks.create');
    }
 
    public function store(PostRequest $request, TagRepository $tagRepository, User $user)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);
 
        $post = $this->postRepository->store($inputs);
 
        if(isset($inputs['tags'])) {
            $tagRepository->store($post, $inputs['tags']);
        }

        
        // Gets the active user. Should come from session in a default app.
        $user = $request->user()->id;
        dd($user);
        $posts = $user->posts()->get();

        $user->unlock(new UserMadeAPost(), 1);
        $user->addProgress(new UserMade10Posts(), 1);
        $user->addProgress(new UserMade100Posts(), 1);
        $user->addProgress(new UserMade1000Posts(), 1);
        return redirect(route('artworks.index'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('artworks.artwork', compact('post'));
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