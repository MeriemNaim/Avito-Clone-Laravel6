<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
class CityController extends Controller
{
    public function index()
    { 
        $cat=Category::all();
         $city=City::all();
        return view('city',['categories'=>$cat],['cities'=>$city]);
    }
}
