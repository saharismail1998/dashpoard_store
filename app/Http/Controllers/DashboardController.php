<?php

namespace App\Http\Controllers;

use App\services\GeoIp;
use App\services\weather;

use Illuminate\Http\Request ;

class DashboardController extends Controller{
    public function index( Request $request){
    $geoIp= new GeoIp();
    $geo=$geoIp->get('89.239.40.45');
    //OR $request->ip())


      //$weather = new Weather();
     // dd( $w=$weather->weather());
     return view('dashpord.dashpord',
    [
      'geo'=>$geo,
      
    ]);



    }
}

?>