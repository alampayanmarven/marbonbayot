<?php Namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingLot;
use App\Models\Motorcycle;

class SiteController extends Controller
{
    public function home(){
        return view('home');
    }

    public function show(){
         $parkinglots = ParkingLot::all();
        return view('parkinglot.show',['parkinglots' => $parkinglots]);
    }

    public function index(){
        $motorcycles = Motorcycle::all();
        return view('motorcycles.index', compact('motorcycles'));
    }



}
