<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Offer;
class CityController extends Controller
{
    public function index()
    { 
        $cat=Category::all();
         $city=City::all();
        return view('city',['categories'=>$cat],['cities'=>$city]);
    }
    public function bycity($id)
    { $offer=offer::where('id_city', $id)->firstOrFail();
    $city=City::where('id', $id)->firstOrFail();
        return view('filterby.bycity',['cities'=>$city],['off'=>$offer]);
    }




}
