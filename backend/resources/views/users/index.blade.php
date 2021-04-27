@extends('layouts.app')
@section('content')
<h1>Users</h1>

@foreach($data as $d)
  <p>{{$d}}</p>
@endforeach

@endsection
