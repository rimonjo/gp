<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
class DriverController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AddDriver(Request $request)
    {
        if ($request->isMethod('post')) {
            $newdriver= new Driver();
            $newdriver->driver_name=$request->driver_name;
            $newdriver->birthday=$request->birthday;
            $newdriver->gender=$request->gender;
            $newdriver->score=$request->score;
            $newdriver->nid=$request->nid;
            //$newdriver->user_id=Auth::user()->id;
            $newdriver->save();
            return redirect('drivers');
        }
        return view('drivers.AddDriver');
    }
    public function ViewDrivers()
    {
        $drivers=Driver::all();
        $ar=array('drivers' => $drivers);
        return view ('drivers.driversview', $ar);
    }


    public function GetDriverById($id)
    {
        $driver=Driver::find($id);
        $ar=array('driver' => $driver);
        return view ('drivers.driverview', $ar);
    }
}
