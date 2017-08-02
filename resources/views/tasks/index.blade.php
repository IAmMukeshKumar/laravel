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
                                        <button type="button" class="btn btn-danger btn-xs"
                                                data-target="#delete-task-modal" data-toggle="modal"
                                                data-id="{{$task->id}}">
                                            <i class="glyphicon glyphicon-trash"></i></button>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="delete-task-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Confirm delete</h4>
                </div>
                <form method="post" data-action="{{route('tasks.destroy',0)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <div class="modal-body">
                        <p>Do you want to delete this task ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i> Delete
                        </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
