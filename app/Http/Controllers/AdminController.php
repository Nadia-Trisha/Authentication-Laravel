<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function login(){
    return view('admin.login');
   }

   public function dashboard(){
    return view ('admin.dashboard');
   }

   public function store(LoginRequest $request)
    {
        $user = $request->all();
        // dd($user);

        if(Auth::guard('admin')->attempt(['email'=>$user['email'],
            'password'=>$user['password']])){
                echo "all are ok";
            }else{
                echo "problem";
            }

    
    }
}
