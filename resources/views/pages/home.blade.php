@extends('base')


@section('content')

    <img src="{{asset('images/tunisia.png')}}" alt="Tunis Flag" class="mt-12 rounded-full shadow-md h-32">

    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Tunis</h1>

    <p class="text-lg text-gray-800">It's currently {{date("h:i A")}}.</p>

@endsection