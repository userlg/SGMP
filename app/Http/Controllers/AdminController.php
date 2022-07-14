<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    
    public function show(){
        $enterprise =  User::find(2)->enterprise;
        //return view('admin.dashboard');
        return $enterprise;
    }
}
