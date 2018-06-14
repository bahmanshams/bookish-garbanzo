<?php

namespace App\Http\Controllers;

use App\User;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ChatController
 * @package App\Http\Controllers
 */
class ChatController extends Controller
{

    /**
     * ChatController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function chat()
    {
        return view('chat');
    }


    /**
     * @param Request $request
     */
    //public function send(request $request)
    //{
    //    $user = User::find(Auth::id());
    //    event(new ChatEvent($request->message, $user));
    //}

    public function send()
    {
        $message = 'Hello';
        $user = User::find(Auth::id());
        event(new ChatEvent($message, $user->name));
    }
}
