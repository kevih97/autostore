<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //create a variable name & modal name (to get the data & display to the views)
        $categories = Categories::all();
        return view('categories.index', compact( 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Categories::all();
        return view('categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse {


        $validated = $request->validate([
            'name' => 'required|not_in:0',
            'slug' => 'required',
        ]);


        $categories = new Categories();
        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->save();
        return redirect('admin/categories')->with('success', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $categories = Categories::find($id);
        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $categories = Categories::find($id);
        return view('categories.edit')->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id): RedirectResponse {

        $validated = $request->validate([
            'name' => 'required|not_in:0',
            'slug' => 'required',
        ]);

        $categories = Categories::find($id);

        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->save();
        return redirect('admin/categories')->with('success', 'Category updated successfully!');

    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Categories::destroy($id);
        return redirect('admin/categories')->with('success', 'Category deleted successfully!');
    }
}
