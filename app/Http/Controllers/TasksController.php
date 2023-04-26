<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{

    private $rules =[
        'firstName' =>'required',
        'lastName' =>'required'
    ];
    public function index(){
        return "Hello  world";
    }

    public function store(Request $request){

            $this->validate($request,$this->rules);
      
            return    $validater;
    }

    public function create(){
        return "Hello  world";
    }
}
