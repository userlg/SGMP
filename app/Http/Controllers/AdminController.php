<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{

    public function show(Request $request)
    {
        

        $message = 'Testing compact method with laravel';

       // return view('admin.dashboard',['message' => $message]);
       return view('admin.dashboard',compact('message'));
    }
}
