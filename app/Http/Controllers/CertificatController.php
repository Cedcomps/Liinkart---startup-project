<?php

namespace App\Http\Controllers;

use PDF;
use App\Post;

/**
* 
*/
class CertificatController extends Controller
{
	
	public function artworkPdf($id)
	{
		$post = Post::findOrFail($id);
		
		$pdf = PDF::loadView('certification', compact('post'))->setPaper('a4', 'landscape');
		$name = "Liinkart_Certification_No-".$post->id.".pdf";
		return $pdf->stream($name);
	}
}
