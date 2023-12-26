<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::orderBy('id')->get();
        return response()->json($cars);
    }

    public function view(Car $car) {
        return response()->json($car);
    }

    public function store(Request $request) {
        // Validate the request data
        $fields = $request->validate([
            'brand' => 'required',
            'horse_power' => 'required',
        ]);

        // Create a new student record using the Student model
        $car = Car::create($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'New Car created with the ID# ' . $car->id
        ]);
    }

    public function update(Request $request, Car $car) {
        $fields = $request->validate([
            'brand' => 'required',
            'horse_power' => 'required',
        ]);

        $car->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Car with ID# ' . $car->id . ' has been updated.'
        ]);
    }

    public function destroy(Car $car) {
        $details = $car->brand.", ".$car->horse_power;
        $car->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'The job '. $details.  ' has been deleted.'
        ]);
    }
}
