<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;

use App\Models\User;

class RegisterController extends Controller
{
    //This controller allow all the logic for register operations
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        return redirect('login')->with('success','account created correctly');
    }
}
