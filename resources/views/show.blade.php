@extends('head')
@section('content')
<h1 class="text-center my-5">{{$todo->name}}</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">DESCRIPTION</div>
                    <div class="card-body">
                        <span>{{ $todo->description }}</span>
                    </div>
                    <div class="row p-3">
                        <div class="col-6">
                            <a href="/about" type="button" class="btn btn-primary btn-sm float-right">Back</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{$todo->id}}/edit"class="btn btn-info btn-sm my-2">Edit</a>
                            <a href="/delete/{{ $todo->id }}" type="button" class="btn btn-danger btn-sm float-right">Delete</a> 
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
@endsection