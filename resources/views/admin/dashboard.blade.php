@extends('layouts.base')

@section('title', 'Dashboard')

@section('content')

    <h3 class="text-center my-3">Welcome to the dashboard {{ auth()->user()->username }}</h3>
    
    @if ($message)
        {{ $message }}
    @endif

@endsection
