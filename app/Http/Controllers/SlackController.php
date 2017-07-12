<?php
 
namespace App\Http\Controllers;

use App\Mail\Slack;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SlackRequest;
 
/**
 * Ask fo Slack Support
 */
class SlackController extends Controller
{
    public function create()
    {
        return view('form.contact');
    }
 
    public function store(SlackRequest $request)
    {
        Mail::to('c.compagnon@liinkart.com')
            ->send(new Slack($request->except('_token')));

        return view('form.email_slack_ok');
    }
}