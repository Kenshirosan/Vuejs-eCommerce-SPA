<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $messages = Message::latest()->get();
        return view('layouts/admin.admin', compact('messages'));
    }
}
