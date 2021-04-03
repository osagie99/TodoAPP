@extends('head')

@section('content')
<h1 class="text-center my-5">TodosAPP</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Todos</div>
                    <div class="card-body">
                        <ul class="list-group">
                        @foreach ($todos as $todo )
                        <li class="list-group-item cover" >
                        <span>{{ $todo->name }}</span>

                        <a href="/show/{{ $todo->id }}" type="button" class="btn btn-primary btn-sm float-right"> View</a>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
