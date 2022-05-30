@extends('dashboard')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="/posts/edit/{{$post->id}}" method="post">
@csrf
<h1 class="space-y-2 my-5 ml-5 text-2xl font-bold">Edit post</h1>
<div class="space-y-2 my-5 ml-5 ">
Title: <input type="text" name="title" value="{{ $post->title }}"><br>
Body: <input type="text" name="body" value="{{ $post->body }}"><br>
Author: <input type="text" name="author_name" value="{{ $post->author_name }}"><br>
<input type="submit" class="bg-blue-900 text-white p-1">
</div>
</form>

@endsection
