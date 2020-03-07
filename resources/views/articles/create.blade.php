@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
    <h2>New Article</h2>
    <form method="POST" action="/articles">
        @csrf
      <div class="form-group">
        <label for="Title">Title:</label>
        <input type="text"
          class="form-control" 
           placeholder="Enter Title"
            name="title"
      value="{{old('title')}}" >
      
        <p class=" text-danger "> {{$errors->first('title')}} </p> 
     
      
    </div>
      <div class="form-group">
        <label for="Excerpt">Excerpt:</label>
        <input type="text" class="form-control"  placeholder="Enter excerpt" name="excerpt" value="{{old('excerpt')}}">
     
        <p class=" text-danger "> {{$errors->first('excerpt')}} </p> 
      
    </div>
      <div class="form-group">
        <label for="body">Description:</label>
        <textarea class="form-control"  placeholder="Enter description" name="body" value ="{{old('body')}}"></textarea>
      
        <p class=" text-danger "> {{$errors->first('body')}} </p> 
     
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
	</div>
    @endsection