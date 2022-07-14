<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class RegisterController extends Controller
{
    //This controller allow all the logic for register operations
    public function show()
    {
        if (Auth::check()){
            return redirect('dashboard');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        $message = 'user registered correctly';

        return view('auth.login')->with(['message' => $message]);

        //return view('admin.dashboard')->with(['message' => $message]);
    }
}
