<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'registration_number' => 'required | min:8',
            'kilometrage'  => 'required',
            'car_model_id'  => 'required',
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car) : Response
    {
        return response()->view(
            'cars.edit',
            ['car' => Car::findOrFail($car->id)]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'registration_number' => 'required | min:8',
            'kilometrage'  => 'required',
            'car_model_id'  => 'required',
        ]);

        $car->update($request->all());
        return redirect()->route('cars.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}
