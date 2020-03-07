@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
    <h2>Edit Article</h2>
        <form method="POST" action="/articles/{{$article->id}}">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="Title">Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Title" name="title" value="{{$article->title}}">
      </div>
      <div class="form-group">
        <label for="Excerpt">Excerpt:</label>
      <input type="text" class="form-control"  placeholder="Enter excerpt" name="excerpt" value="{{$article->excerpt}}">
      </div>
      <div class="form-group">
        <label for="body">Description:</label>
      <textarea class="form-control"  placeholder="Enter description" name="body" value ="{{$article->body}}"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
	</div>
    @endsection