@extends('base')

@section('title','About Us | '.config('app.name'))


@section('content')
<img src="{{asset('images/programmer.png')}}" alt="Belgacem Khadher">
    <p>Built with &hearts; by Belgacem Khadher.</p>
    <p><a href="{{route('app_home')}}">Revenir à la page d'accueil</a></p>

@endsection