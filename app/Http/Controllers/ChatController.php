<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function chat()
    {
        return view('chat');
    }

    //
    public function send(Request $request)
    {
        //
        //return $request->all();

        $user = User::find(Auth::id());
        $message = $request->message;

        event(new ChatEvent($message, $user));
    }
    // public function send()
    // {
    //     //
    //     $user = User::find(Auth::id());
    //     // $message = $request->message;
    //     $message = 'Hello!';

    //     event(new ChatEvent($message, $user));
    // }
}
