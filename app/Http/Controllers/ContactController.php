<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

/**
 * UserController for form
 */
class ContactController extends Controller
{

    public function getForm()
    {
		return view('form.contact');
	}

	public function postForm(ContactRequest $request)
	{
		Mail::to('cedric.compagnon@outlook.fr')
			->send(new Contact($request->except('_token')));

		return view('form.confirm'); 
	}
}
