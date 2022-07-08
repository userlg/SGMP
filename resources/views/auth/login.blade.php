@extends('layouts.base')

@section('title', 'register')

@section('content')

    <h3>Login Form</h3>

    <form action="/login" method="POST" class="d-flex mx-auto flex-column col-8 gap-2 my-2 justify-content-center">
        @csrf
        <input type="text" name="username" placeholder="username or email" required>
        <input type="password" name="password" placeholder="password" required>
        <button class="p-1 btn btn-primary text-light">Register</button>
    </form>

@endsection
