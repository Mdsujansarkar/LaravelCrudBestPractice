<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Image;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function image()
    {
        return view('image');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dataValidation = $request->validate([
            'name'      =>  'required',
            'email'     =>  'required|unique:todos|email',
            'number'    =>  'required|unique:todos|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password'  =>  'required|min:6'
        ]);

        try {
            $create = Todo::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'number'    => $request->number,
                'password'  =>bcrypt($request->number)
            ]);
            return redirect('register/image');
        } catch (\Exception $e) {
            return back()->$e->getMessage();
        }

    }

    public function imageUpload(Request $request)
    {
        if($request()->hasFile('image'))
        {

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
