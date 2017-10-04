<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if( ! Auth::user()->isAdmin() ){
            return redirect('/')->with('error_message', 'Page not found');
        }
        return view('layouts.admin');
    }
}
