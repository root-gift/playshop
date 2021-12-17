<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashbord');
    }

    public function profile($id){
        $user=User::find($id);
        return view('include.navbar1')->with('user', $user);
    }
}
