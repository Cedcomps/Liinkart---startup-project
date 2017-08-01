<?php
 
namespace App\Http\Controllers;

use App\Mail\Slack;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SlackRequest;

use Gstt\Achievements\Achiever;
use App\Achievements\UserConnectedSlack;
use App\User;
use Auth;
 
/**
 * Ask fo Slack Support
 */
class SlackController extends Controller
{
    use Achiever;

    public function create()
    {
        return view('form.contact');
    }
 
    public function store(SlackRequest $request)
    {
        Mail::to('c.compagnon@liinkart.com')
            ->send(new Slack($request->except('_token')));

        $user = User::where('email', '=', Input::get('email'));
        if ($user->exists()) {
            $user = $user->first();
            User::find($user->id)->unlock(new UserConnectedSlack());
        } 
        return view('form.email_slack_ok');
    }
}