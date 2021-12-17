<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return view('client.index');
    }

    public function about(){
        return view('client.apropos');
    }

    public function catalogue(){
        return view('client.catalogue');
    }

    public function popup(){
        return view('client.popup');
    }
}
