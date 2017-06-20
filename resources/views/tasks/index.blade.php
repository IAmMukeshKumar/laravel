@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">My tasks</div>

                    <div class="panel-body">
                        <div class="well">
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <button class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Search</button>
                            </form>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Actions</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>

                                <td>{{$task->start_datetime}}</td>
                                <td>{{$task->end_datetime}}</td>
                                <td><a class="btn btn-primary btn-xs" href="{{route('tasks.edit',$task->id)}}"><i class="glyphicon glyphicon-pencil"></i> Edit</a></td>
                                <td>
                                    <label class="label label-{{$task->status?'success':'default'}}">{{$task->status?'Completed':'Pending'}}</label>
                                </td>
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
