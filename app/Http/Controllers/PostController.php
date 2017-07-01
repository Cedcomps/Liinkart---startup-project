<?php
 
namespace App\Http\Controllers;
 
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Http\Requests\PostRequest;
use App\Post;
 
class PostController extends Controller
{
    protected $postRepository;
 
    protected $nbrPerPage = 8;
 
    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth')->except('index', 'indexTag');
        $this->middleware('admin')->only('destroy');
 
        $this->postRepository = $postRepository;
    }
 
    public function index()
    {
        $posts = $this->postRepository->getWithUserAndTagsPaginate($this->nbrPerPage);
        $links = $posts->render();
 
        return view('artworks.liste', compact('posts', 'links'));
    }
 
    public function create()
    {
        return view('artworks.create');
    }
 
    public function store(PostRequest $request, TagRepository $tagRepository)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);
 
        $post = $this->postRepository->store($inputs);
 
        if(isset($inputs['tags'])) {
            $tagRepository->store($post, $inputs['tags']);
        }
 
        return redirect(route('artworks.index'));
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