<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // raw query
        // $todos = DB::select("SELECT * FROM todos");

        // query builder
        // $todos = DB::table('todos')->get();

        // eloquent
        $todos = Todo::orderBy('id', 'desc')->get();
        return view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create TODO";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $value = $_POST['title'];
        // $value = $request->post('title');
        // $value = $request->input('title');
        $value = $request->title;
        Todo::create(['title' => $value]);
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Todo::where('id', $id)->update(['status' => true]);
        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::where('id', $id)->delete();
        return redirect('/todo');
    }
}
