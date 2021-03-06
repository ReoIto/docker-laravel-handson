@extends('layouts.app')

@section('content')
<h1>ALL VOCAB HERE!</h1>

<div class="pt-10 mb-5">
  <a href="posts/create" class="text-xl border-b-2 pg-2 border-dotted italic text-gray-600">
    ADD NEW VOCAB &rarr;
  </a>
</div>

@foreach($posts as $post)
  <div class="bg-gray-50 mb-5 shadow-xl p-8 rounded lg:w-64">
    <div class="float-right">
      <a href="/posts/{{ $post->id }}/edit" class="border-b-2 mb-3 pg-2 border-dotted italic text-green-500">
        EDIT &rarr;
      </a>
      <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="border-b-2 pg-2 border-dotted italic text-red-500">
          DELETE &rarr;
        </button>
      </form>
    </div>
    <a href="/posts/{{ $post->id }}" class="italic">
      <p class="mb-5">
        <span class="text-xl">
          Title
        </span><br>
         <span>
           {{ $post['title'] }}
         </span>
       </p>
      <p>
        <span class="text-xl">
          Meaning
        </span><br>
        <span>
          {{ $post->meaning }}
        </span>
      </p>
    </a>
  </div>
@endforeach

@endsection
