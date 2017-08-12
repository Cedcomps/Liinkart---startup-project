<?php

namespace App\Http\Controllers;

use PDF;
use App\Post;
use Auth;

/**
* 
*/
class CertificatController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

	public function artworkPdf($id)
	{
		$post = Post::findOrFail($id);
		$user = $post->user->id;
		if(Auth::user()->id == $user) {
			$pdf = PDF::loadView('certification', compact('post'))->setPaper('a4', 'landscape');
			$name = "Liinkart_Certification_No-".$post->id.".pdf";
			return $pdf->stream($name);
		} 
		\Alert::error('Seul l\'auteur de l\'oeuvre peut accèder au certificat')->persistent('Ok');
		return back(); 
	}
}
