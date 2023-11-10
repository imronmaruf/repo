<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepoKpController extends Controller
{
    function index(){
        return view('admin.pages.repository.repo-kp');

    }
}
