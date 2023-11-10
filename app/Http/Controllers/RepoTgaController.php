<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepoTgaController extends Controller
{
    function index(){
        return view('admin.pages.repository.repo-tga');
    }
    
}
