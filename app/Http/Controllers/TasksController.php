<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Auth::user()->tasks;
        $linkUrl = route('login');
        $linkText = 'Log out';
        return view('dashboard', compact('tasks','linkUrl', 'linkText'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create', ['linkUrl'=>route('register'),'linkText'=>'Register']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the input
        $request->validate([
            'title' => 'required',
            'taskDetails' => 'required'
        ]);


        $user_id = Auth::user()->id;
        //Create a new task
        Task::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'details' => $request->taskDetails
        ]);
        $message = 'Task ' .$request->title. ' created successfully!';


        //Redirect the user and send friendly message
        return redirect(route('tasks.index'))->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $linkUrl = route('login');
        $linkText = 'Log out';
        return view('tasks.view', compact('linkUrl','linkText','task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $linkUrl = route('login');
        $linkText = 'Log out';
        return view('tasks.edit', compact('linkUrl','linkText','task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
         //Validate the input
        $request->validate([
            'title' => 'required',
            'taskDetails' => 'required'
        ]);


        $user_id = Auth::user()->id;

        //Update the task
        $task->update([
            'user_id' => $user_id,
            'title' => $request->title,
            'details' => $request->taskDetails
        ]);

        $message = 'Task ' .$request->title. ' updated successfully!';

        //Redirect the user and send friendly message
        return redirect(route('tasks.index'))->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $message = 'Task ' .$task->title. ' deleted successfully!';
        $task->delete();
        return redirect(route('tasks.index'))->with('success', $message);

    }
}
