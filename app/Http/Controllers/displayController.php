<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class displayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function display()
     {
        $users = DB::table('users')->get(['id', 'name', 'role']);

         // Assuming 'role' column contains role names like 'admin', 'doctor', 'user'

         foreach ($users as $user) {
             // Check role for each user
             switch ($user->role) {
                 case 'admin':
                     return redirect('users');
                 // Add more cases for other roles if needed
                 case 'doctor':
                     return view('doctor.home');
                 case 'user':
                     return view('doctor.home');
                 default:
                     return view('welcome');
             }
         }

         // If no user found or no matching role found, redirect to welcome
         return view('welcome');
     }
    }

