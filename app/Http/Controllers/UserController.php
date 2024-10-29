<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome() {
        return view('home');
    }

    public function userAbout($user) {
        return view('about',['user' => $user]);

    }

    public function adminLogin() {
        // return view('admin.login');
        if (view()->exists('admin.sign'))
        {
            return view('admin.login');
        }else{
            return "View not found";
        }
    }
}
