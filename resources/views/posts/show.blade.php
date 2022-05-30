
@extends('dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4 ml-3">{{ $post->title }}</h1>
<p class="italic text-lg bg-slate-200 ml-3">{{ $post->body}}</p>

@if ($post->comments)
@foreach($post->comments as $comment)
<div class="comment">
<h4 class="text-base font-bold mt-3 ml-3"> {{ $comment->author }} </h4>
<p class="text-sm italic ml-3"> {{ $comment->body }} </p>
</div>
@endforeach

<p class="text-xs my-5 ml-3"> Comment count: {{ $post->comments()->count() }}
@endif

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<!-- <form action="/comments/store" method="POST"> -->
<form action="{{ route('comments.store')}}" method="POST">
@csrf
<div class="space-y-2 my-5 ml-3">
<div class="form-input">
<input type="text" placeholder="Author name" name="author" class="text-sm italic">
</div>
<div class="form-input">
<textarea name="body" placeholder="Comment body" class="text-sm italic"></textarea>
</div>
<input type="hidden" value={{ $post->id }} name="commentable_id">
<input type="hidden" value={{ get_class($post) }} name="commentable_type">
<input type="submit" class="bg-blue-900 text-white p-1">
</form>
</div>
@endsection
