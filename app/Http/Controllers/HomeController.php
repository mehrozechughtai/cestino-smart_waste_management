<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sensors = Sensor::orderBy('id', 'DESC')->distinct()->get(); // all bin info
        return view('home')->with('sensors',$sensors);
    }

    public function showBinDetails($id)
    {

        $sensor =  Sensor::find($id);
        return view('binDetail')->with('sensor',$sensor);
    }

    public function teamPage(){

        return view('teamPage');
    }

}
