<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Repositories\AvatarRepositoryInterface;

class AvatarController extends Controller
{
    public function create()
    {
        return view('images.avatar');
    }
 
    public function store(ImagesRequest $request, AvatarRepositoryInterface $avatarRepository)
    {
		$avatarRepository->save($request->image);
         
        return view('images.avatar_ok');
    }
}
