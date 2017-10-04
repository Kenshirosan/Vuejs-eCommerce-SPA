<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest()->get();
        return view('layouts/admin.message', compact('messages'));
        // return Message::latest()->get(); ?? work on that
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
    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'body' => 'required'
            ]);
        } catch (\Exception $e){
            return redirect('#/')->with(['flash-errors' => $e->getMessage() ]);
        }

        $message = Message::create([
            'name'  => request('name'),
            'email'  => request('email'),
            'body'  => request('body')
        ]);

       return response()->json(['flash' => 'Thanks'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message = Message::findOrFail('id');
        $message->delete();
        return back()->with('success_message', 'Message deleted');
    }
}
