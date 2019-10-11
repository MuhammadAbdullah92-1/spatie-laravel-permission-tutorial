<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //public function show
    public function show($id=1)
    {
        $user=array('imran qasim','ceo',100000,'web');
    return view('profile',['users'=>$user]);
    }
}
