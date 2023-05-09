<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crudmodel;

class crudController extends Controller
{

    public function index(){
       $data =  crudmodel::get();
       //return $data;
       return view('todo-list', compact('data'));

    }
    public function addTodo(){
        return   view('add-todo');

    }
    public function saveTodo(Request $request){

    }
}
