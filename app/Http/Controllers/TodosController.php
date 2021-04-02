<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('about')->with('todos', $todos);
    }
    public function show($todoid){
        // dd(Todo::find($todoid)->first());
        // $todo = Todo::find($todoid);
        // if($todo){
        //     Todo::where('id',$todoid)->update([
        //         'name'=>'osagie'
        //     ]);
        // }
        return view('show')->with('todo', Todo::find($todoid));
    }
    public function updateName($id,$new_name){
        $todo = Todo::find($id);
        if($todo){
            Todo::where('id',$id)->update([
                'name'=>$new_name
            ]);
        }
        return view('show')->with('todo', Todo::find($id));
    }
    public function deleteName($id){
        $todo =Todo::find($id);
        if($todo){
            Todo::where('id' ,$id)->delete();
            return $this->index();
        }
    }
    // public function updateDescription($description){
    //     $todo = Todo::find($description);
    //     if($todo){
    //         Todo::where('description',$description)->update([
    //             'description' => $description
    //         ]);
    //     }
    //     return view('show');
    // }
}