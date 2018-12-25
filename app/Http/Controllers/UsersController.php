<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Entry;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::where('user_id', Auth::id())->get();
        $entries = Entry::where('user_id', Auth::id())->get();
        
        return view('users.index', ['threads' => $threads, 'entries' => $entries]);
    }
}
