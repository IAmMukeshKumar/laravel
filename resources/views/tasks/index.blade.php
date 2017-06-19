@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My tasks</div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start</th>
                                <th>Due</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td><button class="btn btn-primary btn-xs">Edit</button></td>
                            </tr>
                            <tr>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td>value</td>
                                <td><button class="btn btn-primary btn-xs">Edit</button></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
