@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">Create new task</div>

                    <div class="panel-body">
                        <form action="{{route('tasks.store')}}" method="post" id="create-task-form">
                            {{csrf_field()}}
                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                <label>Task name</label>
                                <input type="text" class="form-control" placeholder="Task name" name="title"
                                       value={{old('title')}}>
                                @if($errors->has('title'))
                                    <p class="help-block">{{$errors->first('title')}}</p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('description')) has-error @endif">
                                <label>Task description</label>
                                <textarea class="form-control" rows="3" placeholder="Write your task"
                                          name="description">{{old('description')}}</textarea>
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
                                                   name="start_datetime">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                        </div>
                                        @if($errors->has('start_datetime'))
                                            <p class="help-block">{{$errors->first('start_datetime')}}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('end_datetime')) has-error @endif">
                                        <label>End datetime</label>
                                        <div class="input-group date" id="task-end-date">
                                            <input type="text" class="form-control" placeholder="DD/MM/YYYY HH:mm A"
                                                   name="end_datetime">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                        </div>

                                        @if($errors->has('start_datetime'))
                                            <p class="help-block">{{$errors->first('start_datetime')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <input class="btn btn-outline-danger" type="reset" value="Reset">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
