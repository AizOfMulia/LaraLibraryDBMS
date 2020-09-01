<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('pages.welcome');
    }

    public function listBook(){
        $title = 'List of Books';
        return view('pages.listbook')-> with('title',$title);
    }

    public function insertBook(){
        $title = 'Insert Book';
        return view('pages.insertbook')-> with('title',$title);
    }
}
