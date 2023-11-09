<?php

namespace App\Http\Controllers;


use App\Models\Cars;
use App\Models\Categories;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Cars::all();
        $categories = Categories::all();
        return view('welcome',compact('cars', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request) {

        $cars = Cars::where('brand', 'LIKE', '%'.$request->input('search').'%')
                    ->orWhere('model', 'LIKE', '%'.$request->input('search').'%')
                    ->orWhere('registration_date', 'LIKE', '%'.$request->input('search').'%')
                    ->orWhere('price', 'LIKE', '%'.$request->input('search').'%')->get();

        return view('search', ['cars'=>$cars]);

    }



}
