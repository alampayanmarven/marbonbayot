<?php

namespace App\Http\Controllers;

use App\Models\ParkingLot;
use Illuminate\Http\Request;

class ParkingLotController extends Controller
{
    public function index(){
        $parkinglots = ParkingLot::all();

       return view('parkinglot.show',['parkinglots' => $parkinglots]);
   }


    public function create()
    {

        return view('parkinglot.create');
    }
    public function edit($id){

        $parkinglot = ParkingLot::find($id);
        return view('parkinglot.edit', ['parkinglot'=>$parkinglot]);

    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'capacity' => 'required|numeric',
        ]);

        $parkinglot = ParkingLot::find($id);

        $parkinglot -> update([
        'name' => $request->input('name'),
        'location' => $request->input('location'),
        'capacity' => $request->input('capacity'),
        ]);

        return redirect('parkinglot/show')->with('success', 'Parking lot updated successfully1');


    }
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'capacity' => 'required|numeric',
        ]);

        // Create a new parking lot
        ParkingLot::create([
            'name' => $request->input('name'),
            'location' => $request->input('location'),
            'capacity' => $request->input('capacity'),

        ]);

        return redirect('parkinglot/show')->with('success', 'Parkinglot added successfully!');
    }

    public function delete($id)
    {
        $parkinglot = ParkingLot::find($id);

        if (!$parkinglot) {
            return redirect('parkinglot/show')->with('error', 'Parking Lot not found!');
        }

        $parkinglot->delete();

        return redirect('parkinglot/show')->with('success', 'Parking Lot deleted successfully!');
    }
}
