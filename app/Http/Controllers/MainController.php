<?php

namespace App\Http\Controllers;

use App\Post;

class MainController extends Controller
{

    //
    public function view() {
        return view('welcome', ["articles" => \App\Models\Article::latest()->take(3)->get()]);
    }
}
