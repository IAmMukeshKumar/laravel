<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateRequest;
use Illuminate\Http\Request;
use App\Task ;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all()->where('user_id', auth()->user()->id);

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TaskCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskCreateRequest $request)
    {

        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->start_datetime = \Carbon\Carbon::parse($request->start_datetime);
        $task->end_datetime = \Carbon\Carbon::parse($request->end_datetime);
        $task->user_id = auth()->user()->id;

        $task->save();

        return back()->with('success', 'Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
