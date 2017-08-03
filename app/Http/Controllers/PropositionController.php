<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Proposition;
use Illuminate\Support\Facades\Mail;
use App\Post;
use Auth;

class PropositionController extends Controller
{
	public function __construct()
	{	
		$this->middleware('auth');
	}

    public function sendEmail(Request $request, $id)
    {	
		$post = Post::find($id);
		$user = Auth::user();
    	Mail::to($post->user->email)->send(new Proposition($request['price'], $post, $user));
    	\Alert::success('Proposition envoyée !')->autoclose(2000);
        return back();	
    }
}
