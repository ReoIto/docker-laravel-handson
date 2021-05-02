@extends('layouts.app')
@section('content')
  <div class="m-auto w-4/8 py-24">
    <div class="text-center">
      <h1 class="text-5xl uppercase bold">
        VOCAB DETAILS
      </h1>
    </div>
  </div>

  <div class="flex justify-center pt-20">
    <div class="block">
      <ul>
        <li class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic">
          {{ $post->title }}
        </li>
        <li class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic">
          {{ $post->meaning }}
        </li>
        <li class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic">
          {{ $post->example }}
        </li>
        <li class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic">
          {{ $post->synonyms }}
        </li>
        <li class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic">
          {{ $post->antonyms }}
        </li>
        <li class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic">
          {{ $post->note }}
        </li>
      </ul>
      <div class="text-center">
        <a href="/posts/{{ $post->id }}/edit" class="border-b-2 pg-2 border-dotted italic text-green-500">
          EDIT &rarr;
        </a>
      </div>
    </div>
  </div>
@endsection
