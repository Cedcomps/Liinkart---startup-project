<?php
 
namespace App\Http\Controllers;
 
use App\Email;
use App\Http\Requests\EmailRequest;
 
class EmailController extends Controller
{
    public function create()
    {
        return view('email.email');
    }
 
    public function store(EmailRequest $request, Email $email)
    {

        $email->email = $request->email;
        $email->save();
         
        return view('email.email_ok');
    }
}