@extends('base')


@section('content')

    <img src="{{asset('images/tunisia.png')}}" alt="Tunis Flag">
    <h1>Hello from Tunis</h1>
    <p>It's currently {{date("h:i A")}}.</p>

@endsection