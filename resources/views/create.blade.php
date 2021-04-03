@extends('head')
@section('content')
<h1 class="text-cente my-5">Create todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card card-header">Create Todo</div>
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
                <form action="/create-todo" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="Name">
                    </div>
                <div class="form-group">
                    <textarea name="Description"  placeholder="Description" cols="35" rows="5" class="form-control my-2"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Create Todo</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection