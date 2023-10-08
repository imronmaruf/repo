<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMhsController extends Controller
{
    function index()
    {
        return view('admin.pages.data_mhs.index');
    }
}
