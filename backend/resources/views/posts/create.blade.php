@extends('layouts.app')
@section('content')
  <div class="m-auto w-4/8 py-24">
    <div class="text-center">
      <h1 class="text-5xl uppercase bold">
        ADD NEW VOCAB
      </h1>
    </div>
  </div>

  <div class="flex justify-center pt-20">
    <form action="/posts" method="POST">
      @csrf
      <div class="block">
        <input
          type="text"
          name="title"
          value=""
          placeholder="Type vocab..."
          autofocus
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="meaning"
          value=""
          placeholder="Type meaning..."
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="example"
          value=""
          placeholder="Type example..."
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="synonyms"
          value=""
          placeholder="Type synonyms..."
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="antonyms"
          value=""
          placeholder="Type antonyms..."
          class="block border-2 border-gray-200 shadow-5xl mb-10 p-2 w-80 italic"
        >
        <input
          type="text"
          name="Type note"
          value=""
          placeholder="Note..."
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
  @if ($errors->any())
    <div class="w-4/8 m-auto text-center">
      @foreach ($errors->all() as $error)
        <li class="text-red-500 list-none">
          {{ $error }}
        </li>
      @endforeach
    </div>
  @endif
@endsection
