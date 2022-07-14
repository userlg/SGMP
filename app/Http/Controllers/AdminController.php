<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminController extends Controller
{

    public function show()
    {
        $message = 'Testing compact method with laravel';

        $company =  User::find(Auth::user()->id)->enterprise;

        if ($company === null){
            $company ='No company register';
        }

        return view('admin.dashboard', compact('message','company'));
    }
}
