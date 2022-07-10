@extends('layouts.base')

@section('title', 'Dashboard')

@section('content')

    <h3>Welcome to the dashboard   {{ auth()->user()->username }}</h3>

@endsection