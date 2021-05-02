@extends('layouts.app')
@section('content')
<h1>ALL VOCAB HERE!</h1>

<div class="pt-10">
  <a href="posts/create" class="border-b-2 pg-2 border-dotted italic text-gray-600">
    ADD NEW VOCAB &rarr;
  </a>
</div>

@foreach($posts as $post)
  <div class="bg-gray-50 mb-5 shadow-xl p-8 rounded lg:w-64">
    <div class="float-right">
      <a href="/posts/{{ $post->id }}/edit" class="border-b-2 pg-2 border-dotted italic text-green-500">
        EDIT &rarr;
      </a>
    </div>
    <a href="/posts/{{ $post->id }}">
      <p>{{ $post->title }}</p>
      <p>{{ $post->meaning }}</p>
    </a>
  </div>
@endforeach

@endsection
