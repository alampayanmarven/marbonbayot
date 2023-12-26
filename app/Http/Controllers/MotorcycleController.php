<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    public function index() {
        $motorcycles = Motorcycle::orderBy('id')->get();
        return response()->json($motorcycles);
    }

    public function view(Motorcycle $motorcycle) {
        return response()->json($motorcycle);
    }

    public function store(Request $request) {
        // Validate the request data
        $fields = $request->validate([
            'vehicle_model' => 'required',
            'engine_size' => 'required',
        ]);

        // Create a new student record using the Student model
        $motorcycle = Motorcycle::create($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'New Motorcycle created with the ID# ' . $motorcycle->id
        ]);
    }

    public function update(Request $request, Motorcycle $motorcycle) {
        $fields = $request->validate([
            'vehicle_model' => 'required',
            'engine_size' => 'required',
        ]);

        $motorcycle->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Motorcycle with ID# ' . $motorcycle->id . ' has been updated.'
        ]);
    }

    public function destroy(Motorcycle $motorcycle) {
        $details = $motorcycle->name.", ".$motorcycle->location;
        $motorcycle->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'The job '. $details.  ' has been deleted.'
        ]);
    }
}
