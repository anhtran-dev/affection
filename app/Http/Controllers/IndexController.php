<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('layout.index');
    }
    public function blog(){
        return view('pages.blog.blog');
    }
}
