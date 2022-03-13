<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('welcome')->with('user',$user);


    }
}
