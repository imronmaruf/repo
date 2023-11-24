<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('admin.pages.dashboard');
    }

    public function profile()
    {
        return view('admin.pages.profile.index');
    }
}
