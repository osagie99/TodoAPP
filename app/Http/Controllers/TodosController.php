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
    public function show(Todo $todo){
        // dd(Todo::find($todoid)->first());
        // $todo = Todo::find($todoid);
        // if($todo){
        //     Todo::where('id',$todoid)->update([
        //         'name'=>'osagie'
        //     ]);
        // }
        return view('show')->with('todo', $todo);
    }
    public function update(Todo $todo){
        return view('edit')->with('todo', $todo);
    }
    public function deleteName($todo){
        Todo::find($todo);
        session()->flash('success', 'Todo deleted successfully.');
            Todo::where('id' ,$todo)->delete();
            return $this->index();
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
        session()->flash('success', 'Todo created successfully.');
        return redirect('/about');
    }

    public function updateField(Todo $todo){
        $this->validate(request(),[
            'name'=>'required|min:6|max:20',
            'description' => 'required|max:200'
        ]);
        $data = request()->all();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        session()->flash('success', 'Todo updated successfully.');
        $todo->save();
        return redirect('/about');
         
    }
    public function complete(Todo $todo){
        $todo->completed =true;
        session()->flash('success', 'Todo completed successfully.');
        $todo->save();
        return redirect('/about');
        
    }
}