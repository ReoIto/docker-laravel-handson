@extends('layouts.app')
@section('content')
  <div class="m-auto w-4/8 py-24">
    <div class="text-center">
      <h1 class="text-5xl uppercase bold">
        EDIT VOCAB
      </h1>
    </div>
  </div>

  <div class="flex justify-center pt-20">
    <form action="/posts/{{ $post->id }}" method="POST">
      @csrf
      <!-- html自体はGETとPOSTしか存在しないがupdateではPUTが必要。だからここでPUTリクエストを指定する -->
      @method('PUT')
      <div class="block">
        <input
          type="text"
          name="title"
          value="{{ $post->title }}"
          autofocus
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="meaning"
          value="{{ $post->meaning }}"
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="example"
          value="{{ $post->example }}"
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="synonyms"
          value="{{ $post->synonyms }}"
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="antonyms"
          value="{{ $post->antonyms }}"
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="note"
          value="{{ $post->note }}"
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >

        <button
          type="submit"
          class="bg-green-400 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold"
        >
          Submit
        </button>

      </div>
    </form>
  </div>
@endsection
