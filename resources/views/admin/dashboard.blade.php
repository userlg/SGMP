@extends('layouts.base')

@section('title', 'Dashboard')

@section('content')

    <h3>Welcome to the dashboard {{ auth()->user()->username }}</h3>

    @if (User::find(user()->id)->enterprise)
        <p>Empresa Registrada</p>
    @else
    <p>Usted No tiene empresas registras</p>
    @endif

@endsection
