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
        $request-> validate([
            'name' => 'required',
            'todo' => 'required'
        ]);

       // dd($request->all());
        $name =  $request->name;
        $todo =  $request->todo;

       $todos = new  crudmodel();
       $todos ->name= $name;
       $todos ->todo= $todo;
       $todos->save();

       return  redirect()-> back()->with('success', 'todo added successfully');
    }


    public function editTodo($id){

        $data =  crudmodel::where('id' , '=', $id)->first();
        return  view("edit-todo", compact('data') );

    }

    public function updateTodo(Request $request){
        $request-> validate([
            'name' => 'required',
            'todo' => 'required'
        ]);

          // dd($request->all());
          $id =  $request->id;
          $name =  $request->name;
          $todo =  $request->todo;

          crudmodel::where('id', '=', $id)->update([
            'name' => $name,
            'todo' => $todo

          ]);
          return  redirect()-> back()->with('success', 'todo updated successfully');

    }

    public function deleteTodo($id){

        crudmodel::where('id', '=', $id)->delete();

        return  redirect()-> back()->with('success', 'todo delete successfully');


    }

}
