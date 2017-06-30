<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AddTrip(Request $request)
    {
        if ($request->isMethod('post')) {
            $newtrip = new Trip();
            $newtrip->dst=$request->dst;
            $newtrip->src=$request->src;
            $newtrip->trip_date=$request->trip_date;
            $newtrip->final_report=$request->final_report;
            $newtrip->driver_id=$request->driver_id;
            //$newdriver->user_id=Auth::user()->id;
            $newtrip->save();
            return redirect('trips');
        }
        return view('trips.AddTrip');
    }

    public function ViewTrips()
    {
        $trips=Trip::all();
        $ar=array('trips' => $trips);
        return view ('trips.Tripsview', $ar);
    }
    public function GetTripById($id)
    {
        $trip=Trip::find($id);
        $ar=array('trip' => $trip);
        return view ('trips.Tripview', $ar);
    }


}
