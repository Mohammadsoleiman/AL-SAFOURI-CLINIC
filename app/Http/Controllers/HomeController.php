<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $role=Auth::user()->role;
        if($role=='admin'){
            return redirect('users');
            }
                else if ($role=="doctor"){
                    return view('doctor.home');
            }
            else{
                return view('user.home');
            }
        }
        public function home(){
            return view( 'user.home');
        }
        public function homedoctor(){
            if(auth()->user()->role =='doctor'){
            return view( 'doctor.home');}
            elseif(auth()->user()->role =='user'){
                return view( 'user.home');
            }
            else{
                return view('welcome');
            }
        }
        public function hist(){
            return view( 'admin.hist');
        }
        public function contact(){
            return view('contact');
        }
        public function about(){
            return view('about');
        }

    }

