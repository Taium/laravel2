@extends('pages.master')


@section('content')


			<section>
		
		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 offset-lg-3">

					<center><h1>Admin panel</h1></center>
					<br>
					<div class="card p-3">
						@if(session()->has('success'))
						   <div class="alert alert-success">
						        {{ session()->get('success') }}
						   </div>
						@endif

					<form action="{{route('admin.post.store')}}" method="POST">
					@csrf
					  <div class="form-group">
					    <label for="title">Title:</label>
					    <input type="text" class="form-control" name="title">
					  </div>
					  <div class="form-group">
					    <label for="description">Description:</label>
					    <textarea name="description"  class="form-control w-100" 	cols="30" rows="10"></textarea>
					  </div>
					  
					  <center>	<button type="submit" class="btn btn-info">add post</button>
					  </center>
					</form>
				</div>
				</div>
			</div>

		</div>
		<div class="row">
  			<div class="col-md-12">
  				<table class="table table-dark">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Title</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
				  	 @foreach($posts as $key =>$post)
                    <tr>
                    <th scope="row">{{$key+1}}</th>
				      <td>{{$post->title}}</td>
				      <td>
						
				      	<form action="{{route('admin.post.delete')}}" method="POST">
				      		@csrf
				      		<input type="hidden" name="id" value="{{$post->id}}">
				      		<input type="submit" value="Delete" name="Delete" class="bt btn-danger">
				      </form></td>

				      <td>
						<a href="/edit/{{$post->id}}" class="btn btn-success">Edit</a>
				      	</td>
				    </tr>

				    @endforeach
				  </tbody>
				</table>
  			</div>
  		</div>
		<br>
		<br>
		<br>
  </section>	


<br><br><br><br><br>
@endsection