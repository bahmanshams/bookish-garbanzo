<?php namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
     * @return View
     */
    public function chat()
    {
        return view('chat');
    }


    /**
     * Send message
     * @param Request $request
     */
    public function send(request $request)
    {
        $user = User::find(Auth::id());

        $this->saveToSession($request);

        event(new ChatEvent($request->message, $user));
    }


    /**
     * Save to session
     * @param Request $request
     */
    public function saveToSession(request $request)
    {
        session()->put('chat', $request->chat);
    }

    public function getOldMessage()
    {
        return session('chat');
    }


    /**
     * Delete Session
     */
    public function deleteSession()
    {
        session()->forget('chat');
    }
}
