<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    public function index()
    {
        $motorcycles = Motorcycle::all();

        return view('motorcycle.index', ['motorcycles' => $motorcycles]);
    }

    public function create()
    {
        return view('motorcycle.create');
    }

    public function edit($id)
    {
        $motorcycle = Motorcycle::find($id);

        return view('motorcycle.edit', ['motorcycle' => $motorcycle]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'vehicle_model' => 'required',
            'engine_size' => 'required',


        ]);

        $motorcycle = Motorcycle::find($id);

        $motorcycle->update([
            'vehicle_model' => $request->input('vehicle_model'),
            'engine_size' => $request->input('engine_size'),

        ]);

        return redirect('motorcycle/index')->with('success', 'Motorcycle updated successfully!');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'vehicle_model' => 'required',
            'engine_size' => 'required',

        ]);

        // Create a new motorcycle
        Motorcycle::create([
            'vehicle_model' => $request->input('vehicle_model'),
            'engine_size' => $request->input('engine_size'),

        ]);

        return redirect('motorcycle/index')->with('success', 'Motorcycle added successfully!');
    }

    public function delete($id)
    {
        $motorcycle = Motorcycle::find($id);

        if (!$motorcycle) {
            return redirect('motorcycle/index')->with('error', 'Motorcycle not found!');
        }

        $motorcycle->delete();

        return redirect('motorcycle/index')->with('success', 'Motorcycle deleted successfully!');
    }
}
