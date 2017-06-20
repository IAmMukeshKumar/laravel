@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">My tasks</div>

                    <div class="panel-body">
                        <div class="well">
                            <form class="form-inline" action="{{route('tasks.index')}}" method="get">
                                <div class="form-group">
                                    <select class="form-control" name="paginate" value="{{request('paginate')}}">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Title"
                                           value="{{request('title')}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="description" placeholder="Description"
                                           value="{{request('description')}}">
                                </div>

                                <div class="form-group">
                                    <label class="checkbox">
                                        <input type="checkbox" name="status" value="1"
                                               @if(request('status')) checked @endif> Only show pending
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>
                                    Search
                                </button>
                            </form>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Status</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->title}}</td>
                                    <td>{{str_limit($task->description,30)}}</td>

                                    <td>{{$task->start_datetime->format('d-m-y h:i:s a')}}</td>
                                    <td>{{$task->end_datetime->format('d-m-y h:i:s a')}}</td>
                                    <td>
                                        <label class="label label-{{$task->status?'success':'default'}}">{{$task->status?'Completed':'Pending'}}</label>
                                    </td>
                                    <td><a class="btn btn-primary btn-xs" href="{{route('tasks.edit',$task->id)}}"><i
                                                    class="glyphicon glyphicon-edit"></i></a>
                                        <a class="btn btn-danger btn-xs" href="{{route('tasks.destroy',$task->id)}}"><i
                                                    class="glyphicon glyphicon-trash"></i></a>
                                    </td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="text-center">
                            {{ $tasks->appends(request()->all())->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
