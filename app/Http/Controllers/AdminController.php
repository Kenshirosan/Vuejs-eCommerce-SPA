<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('layouts.admin', compact('messages'));
    }
}
