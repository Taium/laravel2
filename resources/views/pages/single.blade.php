@extends('pages.master')


@section('content')

	     <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
          </div>
        </div> 
       </div> 

@endsection