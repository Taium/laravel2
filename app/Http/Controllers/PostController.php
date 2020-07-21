<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function store(Request $r){
    	$post = new Post;

    	$title = $r->title;
    	$description = $r->description;

    	$post->title = $title;
    	$post->description = $description;

    	$post->save();

    	return back()->with('success','post added');
    }
    public function single($id){

    	$post = Post::find($id);

    	return view('pages.single',compact('post'));
    }

    public function delete(Request $r){
    	$id = $r->id;

    	$post = Post::find($id);

    	$post->delete();

    	return back()->with('success','post deleted');
    }
    public function edit(Request $r){

    	$id = $r->id;

    	$post = Post::find($id);

    	return view('pages.updatepost')->with('post',$post);
    }
    public function update(Request $request, $id){

    	$post = Post::find($id);
    	$post->title=$request->title;
    	$post->description=$request->description;
    	$post->save();
    	return redirect('admin')->withSuccess('post updated!');
	}


}
