<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\PostRepository;

use App\User;
use Auth;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\Revision;
use App\Achievements\UserEyesLynx;
use App\Achievements\UserModerator;

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

    public function update(Request $request, $post)
    {
        $post = Post::findOrFail($post);
        $post->revision = false;
        $post->update();
        
        $user = Auth::user();
        $user->unlock(new UserEyesLynx());
        $user->addProgress(new UserModerator(), 1);
        \Alert::success('Oeuvre conforme')->autoclose(2000);
        return back();
    } 
}