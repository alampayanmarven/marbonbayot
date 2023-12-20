<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('car.index', ['cars' => $cars]);
    }

    public function create()
    {
        return view('car.create');
    }

    public function edit($id)
    {
        $car = Car::find($id);

        return view('car.edit', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required',
            'horse_power' => 'required',

        ]);

        $car = Car::find($id);

        $car->update([
            'brand' => $request->input('brand'),
            'horse_power' => $request->input('horse_power'),

        ]);

        return redirect('car/index')->with('success', 'Car updated successfully!');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'brand' => 'required',
            'horse_power' => 'required',

        ]);

        // Create a new car
        Car::create([
            'brand' => $request->input('brand'),
            'horse_power' => $request->input('horse_power'),

        ]);

        return redirect('car/index')->with('success', 'Car added successfully!');
    }

    public function delete($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return redirect('car/index')->with('error', 'Car not found!');
        }

        $car->delete();

        return redirect('car/index')->with('success', 'Car deleted successfully!');
    }
}
