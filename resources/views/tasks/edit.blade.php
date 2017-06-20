@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(session('success'))
                    <div class="alert alert-success">
                    <i class="glyphicon glyphicon-ok"></i>   {{session('success')}}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Update task</div>

                    <div class="panel-body">
                        <form action="{{route('tasks.update',$task->id)}}" method="post" id="create-task-form">
                            {{method_field('PATCH')}}
                            {{csrf_field()}}
                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label>Task name</label>

                                <input type="text" class="form-control" placeholder="Task name" name="title"
                                       value={{old('title',$task->title)}}>
                                @if($errors->has('title'))
                                    <p class="help-block">{{$errors->first('title')}}</p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('description')) has-error @endif">
                                <label>Task description</label>
                                <textarea class="form-control" rows="3" placeholder="Write your task"
                                          name="description">{{old('description',$task->description)}}</textarea>
                                @if($errors->has('description'))
                                    <p class="help-block">{{$errors->first('description')}}</p>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('start_datetime')) has-error @endif">
                                        <label>Start Datetime</label>
                                        <div class="input-group date" id="task-start-date">
                                            <input type="text" class="form-control" placeholder="DD/MM/YYYY HH:mm A"
                                                   name="start_datetime"
                                                   value="{{old('start_datetime', $task->start_datetime->format('m/d/Y h:i A'))}}">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                        </div>
                                        @if($errors->has('start_datetime'))
                                            <p class="help-block">"{{$errors->first('start_datetime')}}"</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('end_datetime')) has-error @endif">
                                        <label>End datetime</label>
                                        <div class="input-group date" id="task-end-date">
                                            <input type="text" class="form-control" placeholder="DD/MM/YYYY HH:mm A"
                                                   name="end_datetime"
                                                   value="{{old('end_datetime',$task->end_datetime->format('m/d/Y h:i A'))}}">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                        </div>

                                        @if($errors->has('end_datetime'))
                                            <p class="help-block">{{$errors->first('end_datetime')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="status" value="1" @if($task->status) checked @endif> Mark as complete
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
