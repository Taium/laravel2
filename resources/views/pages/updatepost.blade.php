@extends('pages.master');


@section('content');
	<section>
		<br>
		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 offset-lg-3">
					<div class="card p-3">

						@if(session()->has('success'))
						   <div class="alert alert-success">
						        {{ session()->get('success') }}
						   </div>
						@endif


					<form action="{{route('admin.post.update',['id'=> $post->id]) }}"
					 method="POST">
						@csrf
					  <div class="form-group">
					    <label for="title">Title:</label>
					    <input type="text" class="form-control" name="title" value="{{$post->title}}">
					  </div>
					  <div class="form-group">
					    <label for="description">Description:</label>
					    <input type="text" class="form-control" name="description" value="{{$post->description}}">
					  </div>
					  
					  <center>	<button type="submit" class="btn btn-info">update post</button>
					  </center>
					</form>
				</div>
				</div>
			</div>

			


		</div>
		<br>
		<br>
		<br>
  </section>	
  		

@endsection