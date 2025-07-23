<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $request->title;
        // raw query
        // $todos = DB::select("SELECT * FROM todos");

        // query builder
        // $todos = DB::table('todos')->get();

        // eloquent
        $todos = Todo::when(
            $title,
            fn($query, $title) => $query->where('title', 'ilike', "%{$title}%")
        )->orderBy('id', 'desc')->paginate(10);
        return view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTodoRequest $request)
    {
        // $rules = [
        //     'title' => 'required|string|max:255|min:5',
        //     'description' => 'required|string',
        //     'due_date' => 'required|date',
        //     'priority' => 'required|in:low,medium,high',
        // ];

        // $request->validate($rules);
        // Validator::make($request->all(), $rules)->validate();

        Todo::create($request->all());
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return view('todo.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todo');
    }
}
