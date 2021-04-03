@extends('head')
@section('content')
<h1 class="text-cente my-5">Edit todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card card-header">Edit Todo</div>
            <div class="card card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/update-todos/{{$todo->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{$todo->name}}" value="{{$todo->name}}" name="name">
                    </div>
                <div class="form-group">
                    <textarea name="description"  placeholder="{{$todo->description}}" value="{{$todo->description}}" cols="35" rows="5" class="form-control my-2"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Update Todo</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection