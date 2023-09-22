<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     // Display the login form
     public function loginForm()
     {
         return view('admin.auth.login');
     }
 
     // Handle the login logic
     public function login(Request $request)
     {
         // Your login logic here
     }
 
     // Handle the logout logic
     public function logout()
     {
         // Your logout logic here
     }
 
}
