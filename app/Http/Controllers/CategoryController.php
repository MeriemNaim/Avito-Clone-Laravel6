<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
class CategoryController extends Controller
{
    public function index()
    { 
        $cat=Category::all();
         $city=City::all();
        return view('category',['categories'=>$cat],['cities'=>$city]);
    }
}
