@extends('layouts.app')
@section('content')
<h1>ALL VOCAB HERE!</h1>

@foreach($posts as $post)
  <div class="bg-white shadow p-8 rounded lg:w-64">
    <a href="#">
      <p>{{ $post->title }}</p>
    </a>
    <p>
      {{ $post->meaning }}
    </p>
  </div>
@endforeach

@endsection
