<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use App\Models\Cars;
use App\Models\Categories;
use Illuminate\View\View;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //create a variable name & modal name (to get the data & display to the views)
        $cars = Cars::all();
        $categories = Categories::all();
        return view('cars.index', compact('cars', 'categories'));
//        return view ('cars.index')->with('cars', $cars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cars = Cars::all();
        $categories = Categories::all();
        return view('cars.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse {


        $validated = $request->validate([
            'category' => 'required|not_in:0',
            'brand' => 'required',
            'model' => 'required',
            'registration_date' => 'required',
            'engine_size' => 'required',
            'price' => 'required',
        ]);


        $cars = new Cars();
        $cars->brand = $request->brand;
        $cars->model = $request->model;
        $cars->registration_date = $request->registration_date;
        $cars->engine_size = $request->engine_size;
        $cars->price = $request->price;
        $cars->category_id = $request->category;
        $cars->save();
        return redirect('admin/cars')->with('success', 'Car added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $cars = Cars::find($id);
        $categories = Categories::all();
        return view('cars.show', compact('cars', 'categories'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {

        $cars = Cars::find($id);
        $categories = Categories::all();
        return view('cars.edit',compact('cars','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse {

        $validated = $request->validate([
            'category' => 'required|not_in:0',
            'brand' => 'required',
            'model' => 'required',
            'registration_date' => 'required',
            'engine_size' => 'required',
            'price' => 'required',
        ]);


        $cars = Cars::find($id);
        $categories = Categories::all();

        $cars->category_id = $request->category;
        $cars->brand = $request->brand;
        $cars->registration_date = $request->registration_date;
        $cars->model = $request->model;
        $cars->engine_size = $request->engine_size;
        $cars->price = $request->price;
        $cars->registration_date = $request->registration_date;
        $cars->save();
        return redirect('admin/cars')->with('success', 'Car updated successfully!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Cars::destroy($id);
        return redirect('admin/cars')->with('success', 'Car deleted successfully!');
    }


    public function carBasket()
    {
        $cars = Cars::all();
        return view('basket',compact('cars'));

    }
    public function addCarToBasket($id)
    {
        $cars = Cars::findOrFail($id);
        $basket = session()->get('basket', []);
        if(isset($cart[$id])) {
            $basket[$id]['quantity']++;
        } else {
            $basket[$id] = [
                "name" => $cars->brand,
                "quantity" => 1,
                "model" => $cars->model,
                "price" => $cars->price,
            ];
        }
        session()->put('basket', $basket);
        return redirect()->back()->with('success', 'Car has been added to basket!');
    }



    public function updateBasket(Request $request)
    {
        if($request->id && $request->quantity){
            $basket = session()->get('basket');
            $basket[$request->id]["quantity"] = $request->quantity;
            session()->put('basket', $basket);
            session()->flash('success', 'Basket updated successfully');
        }
    }





    public function deleteCar(Request $request)
    {
        if($request->id) {
            $basket = session()->get('basket');
            if(isset($basket[$request->id])) {
                unset($basket[$request->id]);
                session()->put('basket', $basket);
            }
            session()->flash('success', 'Car successfully deleted.');
        }
    }












}
