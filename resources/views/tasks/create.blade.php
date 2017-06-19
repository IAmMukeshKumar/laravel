@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new task</div>

                    <div class="panel-body">
                        <form action="{{route('tasks.store')}}" method="post" id="create-task-form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Task name</label>
                                <input type="text" class="form-control" placeholder="Task name" name="title">
                            </div>

                            <div class="form-group">
                                <label>Task description</label>
                                <textarea class="form-control" rows="3" placeholder="Write your task"
                                          name="description"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Datetime</label>
                                        <div class="input-group date" id="task-start-date">
                                            <input type="text" class="form-control" placeholder="DD/MM/YYYY HH:mm A"
                                                   name="start_datetime" value="06/16/2017 02:42 PM">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End datetime</label>
                                        <div class="input-group date" id="task-end-date">
                                            <input type="text" class="form-control" placeholder="DD/MM/YYYY HH:mm A"
                                                   name="start_datetime" value="06/16/2017 02:42 PM">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
