<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function dataenter(Request $requests)
    {
     $this->validate($requests,
        [
            'topic'=>'required',
            'description'=>'required',
        ]);

        $title=$requests->topic;
        $topic=$requests->description;
        $start_time=$requests->start_time;
        $start_date=$requests->start_date;
        $end_time =$requests->end_time;
        $end_date =$requests->end_date;

        $User=new task();
        $User->title= $title;
        $User->body=$topic;
        $User->start_date=$start_date;
        $User->end_date=$end_date;
        $User->start_time=$start_time;
        $User->end_time=$end_time;
        $User->user_id=1;
        $User->save();

       echo $requests->topic;
       echo $requests->description;
    }
}
