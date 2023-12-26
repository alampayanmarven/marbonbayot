<?php

namespace App\Http\Controllers;

use App\Models\ParkingLot;
use Illuminate\Http\Request;

class ParkingLotController extends Controller
{
    public function index() {
        $parkinglots = ParkingLot::orderBy('id')->get();
        return response()->json($parkinglots);
    }

    public function view(ParkingLot $parkinglot) {
        return response()->json($parkinglot);
    }

    public function store(Request $request) {
        // Validate the request data
        $fields = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'capacity' => 'required',
        ]);

        // Create a new student record using the Student model
        $parkinglot = ParkingLot::create($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'New parkinglot created with the ID# ' . $parkinglot->id
        ]);
    }

    public function update(Request $request, ParkingLot $parkinglot) {
        $fields = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'capacity' => 'required',
        ]);

        $parkinglot->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Parkinglot with ID# ' . $parkinglot->id . ' has been updated.'
        ]);
    }

    public function destroy(ParkingLot $parkinglot) {
        $details = $parkinglot->name.", ".$parkinglot->location;
        $parkinglot->delete();

        return response()->json([
            'status' => 'OK',
            'message' => 'The job '. $details.  ' has been deleted.'
        ]);
    }
}
