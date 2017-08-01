<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\PostRepository;

use App\User;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\Revision;

use Illuminate\Http\Request;

class EspaceAdminController extends Controller
{
    protected $userRepository;
    protected $postRepository;
 
    protected $nbrPerPage = 6;
 
    public function __construct(UserRepository $userRepository, PostRepository $postRepository)
    {
        $this->middleware('admin');
        $this->userRepository = $userRepository;
        $this->postRepository = $postRepository;
    }
 
    public function index()
    {
    	$countPost = Post::count();
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $posts = Post::all();
        $countUser = User::count();
        return view('admin.dashboard', compact('users', 'countUser', 'posts', 'countPost'));
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        Mail::to($post->user->email)
            ->send(new Revision($post));
        $this->postRepository->destroy($post);
        \Alert::info('Mail envoyé et oeuvre supprimée');
        return back();
    }
}