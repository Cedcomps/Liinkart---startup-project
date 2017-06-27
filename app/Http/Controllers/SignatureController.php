<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Repositories\SignatureRepositoryInterface;

class SignatureController extends Controller
{
    public function getSign()
    {
        return view('sign.signature');
    }
 
    public function postSign(ImagesRequest $request, SignatureRepositoryInterface $signatureRepository)
    {
		$signatureRepository->save($request->image);
         
        return view('sign.signature_ok');
    }
}
