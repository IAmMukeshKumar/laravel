@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">My tasks</div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>

                                <td>{{$task->start_datetime}}</td>
                                <td>{{$task->end_datetime}}</td>

                                <td><button class="btn btn-primary btn-xs">Edit</button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
