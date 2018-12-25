<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Entry;
use App\Http\Requests\ThreadRequest;
use App\Http\Requests\EntryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['destroyEntry']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::orderBy('created_at', 'desc')->paginate(50);
        return view('threads.index', ['threads' => $threads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThreadRequest $request)
    {
        $input = $request->input();

        if (Auth::check()) {
            $input['user_id'] = Auth::id();
            $input['name'] = null;
        }
        Thread::create($input);

        return redirect()->route('threads.index');
    }

    public function storeEntry(EntryRequest $request)
    {
        $input = $request->input();

        if (Auth::check()) {
            $input['user_id'] = Auth::id();
            $input['name'] = null;
        }

        $entry = Entry::create($input);

        return redirect()->route('threads.show', ['thread' => $entry->thread]);
    }

    public function destroyEntry($id)
    {
        $entry = Entry::where('id', $id)
                      ->where('user_id', Auth::id())
                      ->firstOrFail();

        $entry->delete();

        return redirect()->route('threads.show', ['thread' => $entry->thread]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return view('threads.show', ['thread' => $thread]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
