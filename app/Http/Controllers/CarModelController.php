<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carModels = CarModel::all();
        return view('carModels.index', compact('carModels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carModels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'launch_date' => 'required',
            'brand_id'  => 'required',
        ]);
        CarModel::create($request->all());
        return redirect()->route('carModels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarModel $carModel)
    {
        return view('carModels.show', compact('carModel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : Response
    {
        return response()->view(
            'carModels.edit',
            ['carModel' => CarModel::findOrFail($id)]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarModel $carModel)
    {
         $request->validate([
            'name' => 'required',
            'launch_date' => 'required',
            'brand_id'  => 'required',
        ]);

        $carModel->update($request->all());
        return redirect()->route('carModels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarModel $carModel)
    {
        $carModel->delete();
        return redirect()->route('carModels.index');
    }
}
