<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use Geocoder\Laravel\Facades\Geocoder;
use Phpml\Regression\LeastSquares;
use Mapper;

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

        $sense = Sensor::latest('id')->first();
        // $location = Geocoder::reverse(43.882587,-103.454067)->get();
        $samples = [[60], [61], [62], [63], [65]];
        $targets = [3.1, 3.6, 3.8, 4, 4.1];

        $regression = new LeastSquares();
        $regression->train($samples, $targets);
        $nextPredictiveDay = $regression->predict([64]);

        $sensors = Sensor::orderBy('id', 'desc')->take(5)->get();


        #showing map polyline data and desplay

        $locationMap = Mapper::location('University of Central punjab, Lahore, Pakistan');

        // $locationMap->map(['zoom' => '10', 'center' => true, 'marker' => false, 'overlay' => 'ROADMAP'])
        //   ->informationWindow($locationMap->getLatitude(), $locationMap->getLongitude(), '<a href="https://www.google.co.uk/maps/dir/Current%20Location/' . $locationMap->getLatitude() . ',' . $locationMap->getLongitude() . '/?dirflg=w|location" title="Directions">Directions</a>');



        Mapper::map($locationMap->getLatitude(),$locationMap->getLongitude())->polyline([['latitude' => $locationMap->getLatitude(),'longitude' => $locationMap->getLongitude()],['latitude' => 31.433097, 'longitude' => 74.261949],['latitude' => 31.468722, 'longitude' => 74.317268]], ['strokeColor' => '#27bd8b', 'strokeOpacity' => 0.7, 'strokeWeight' => 3]);

        Mapper::marker($locationMap->getLatitude(), $locationMap->getLongitude(), ['eventClick' => 'console.log("Current Location");']);


       Mapper::informationWindow($locationMap->getLatitude(), $locationMap->getLongitude(), 'Content', ['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => 'My Location']]);

        return view('home')->with('sensors',$sensors)->with('sense',$sense)->with('nextPredictiveDay',$nextPredictiveDay);
    }

    public function showBinDetails($id)
    {

        $sensor =  Sensor::find($id);
       // $sensor->location = app('geocoder')->reverse(43.882587,-103.454067)->get();
        $location = Geocoder::reverse(43.882587,-103.454067)->get();

        // MACHINE LEARNING - REGRESSION - LEAST SQUARE METHOD
        $samples = [[60], [61], [62], [63], [65]];
        $targets = [3.1, 3.6, 3.8, 4, 4.1];

        $regression = new LeastSquares();
        $regression->train($samples, $targets);

        $nextPredictiveDay = $regression->predict([64]);



        return view('binDetail')->with('sensor',$sensor)->with('location',$location)->with('nextPredictiveDay',$nextPredictiveDay);
    }

    public function teamPage(){

        return view('teamPage');
    }

}
