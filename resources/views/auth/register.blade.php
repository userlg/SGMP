@extends('layouts.base')

@section('title','register')

@section('content')

<h3>Register Form</h3>

<form action="/register" method="POST" class="d-flex mx-auto flex-column col-8 gap-2 my-2 justify-content-center">
    @csrf
    <input type="text" name="username" placeholder="username" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="password" name="password_confirmation" placeholder="confirm password" required>
    <button class="p-1 btn btn-primary text-light">Register</button>
</form>

@endsection