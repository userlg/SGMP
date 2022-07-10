@extends('layouts.base')

@section('title', 'Home')

@section('content')

    <h2>Welcome the home view</h2>
    @auth
        <p>Usted esta autenticado -- Bienvenido  {{ auth()->user()->username }}</p>
    @endauth

    @guest
        <p>Bienvenido invitado</p>
    @endguest

@endsection
