<?php
 
namespace App\Http\Controllers;
 
use App\Email;
use App\Http\Requests\EmailRequest;
 
class EmailController extends Controller
{
    public function create()
    {
        return view('form.contact');
    }
 
    public function store(EmailRequest $request, Email $email)
    {

        $email->email = $request->email;
        $email->save();
         
        return view('form.email_slack_ok');
    }
}