@extends('base')

@section('title','About Us | '.config('app.name'))


@section('content')

    <p>Built with &hearts; by Belgacem Khadher.</p>
    <p><a href="{{route('app_home')}}">Revenir à la page d'accueil</a></p>

@endsection