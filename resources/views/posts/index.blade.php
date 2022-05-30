@extends('dashboard')

@section('content')
<!-- <div class="mx-12">
    <a href="{{ route('posts.create') }}">
        Create
    </a>
</div> -->

<div class="flex space-x-2">
  <button
    type="button"
    data-mdb-ripple="true"
    data-mdb-ripple-color="dark"
    class="inline-block px-6 py-2.5 bg-blue-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
  ><a href="{{ route('posts.create') }}">
        Create
    </a></button>
</div>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">

<table class="min-w-full text-center">
<thead class="border-b bg-gray-800">
    <tr>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">ID</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Title</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Body</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Author name</th>
        <th scope="col" class="text-sm font-medium text-white px-6 py-4">Actions</th>
</tr>
</thead class="border-b">
<tbody>
@foreach($posts as $post)
<tr class="bg-white border-b">
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $post->id }}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $post->title }}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $post->body }}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $post->author_name }}</td>
    
<td>
<div class="flex gap-0.01">
  <button
    type="button" class="inline-block px-2 py-1.5 bg-blue-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
    Show
    </a>
    </button>
    &nbsp;
    <button
    type="button" class="inline-block px-2 py-1.5 bg-blue-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
    Edit
    </a>
    </button>
    &nbsp;
    <button
    type="button" class="inline-block px-2 py-1.5 bg-blue-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
    <a href="{{ route('posts.delete', ['post' => $post->id]) }}">
    Delete
    </a></button>
</div>
<!-- <a href="{{ route('posts.show', ['post' => $post->id]) }}">
Show
</a>
<a href="{{ route('posts.edit', ['post' => $post->id]) }}">
Edit
</a>
<a href="{{ route('posts.delete', ['post' => $post->id]) }}">
Delete
</a> -->
</td>
</tr>
@endforeach
<tbody>
</table>

@endsection