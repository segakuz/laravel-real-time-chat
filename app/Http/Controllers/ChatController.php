<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;

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
        $user = User::find(Auth::id());
        $message = $request->message;

        event(new ChatEvent($message, $user));
    }
}
