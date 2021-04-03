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
    public function update($id){
        $todo = Todo::find($id);
        
        return view('edit')->with('todo', $todo);
    }
    public function deleteName($id){
        $todo =Todo::find($id);
        if($todo){
            Todo::where('id' ,$id)->delete();
            return $this->index();
        }
    }
    public function create(){
        return view('create');
    }
    public function store(){
        $this->validate(request(),[
            'Name'=>'required|min:6|max:20',
            'Description' => 'required|max:200'

        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name =  $data['Name'];
        $todo->description = $data['Description'];
        $todo->completed = false;
        $todo->save();
        return redirect('/about');
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
    public function updateField($id){
        $this->validate(request(),[
            'name'=>'required|min:6|max:20',
            'description' => 'required|max:200'
        ]);
        $data = request()->all();
        $todo = Todo::find($id);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        return redirect('/about');
         
    }
}