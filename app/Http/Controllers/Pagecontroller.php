<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Pagecontroller extends Controller
{

       public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    	return view('pages.home');
    }

    public function category(){
    	return view('pages.category');
    }

    public function archive(){
    	return view('pages.archive');
    }

    public function elements(){
    	return view('pages.elements');
    }

    public function blog(){
    	$posts = Post::all();
    	return view('pages.blog',compact('posts'));
    }

    public function contact(){
    	return view('pages.contact');
    }

    public function admin(){
    	$posts = Post::all();
    	return view('pages.admin', compact('posts'));
    }

}
