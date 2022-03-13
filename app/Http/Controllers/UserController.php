<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr=array("name"=>"Deepak", "age"=>21, "marks"=>75);
        $object=(object)$arr;
       
        
        dd($object);
        return view("welcom")->with("object",$object);

    }
}
