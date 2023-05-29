@extends('layouts/base', ['title' =>'About Us'])

@section('title','About Us | '.config('app.name'))


@section('content')
    <img src="{{asset('images/programmer.png')}}" alt="Belgacem Khadher" class="my-12 rounded-full shadow-md">

    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by Belgacem Khadher.
    </h2>

    <p>
        <a href="{{route('app_home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
    </p>

@endsection