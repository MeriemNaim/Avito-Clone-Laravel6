<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Offer;
class CategoryController extends Controller
{
    public function index()
    { 
        $cat=Category::all();
         $city=City::all();

        return view('category',['categories'=>$cat],['cities'=>$city]);
    }
    public function bycat($id)
    { $offer=offer::where('id_category', $id)->get();
    $cat=Category::where('id', $id)->firstOrFail();
        return view('filterby.bycat',['categories'=>$cat],['off'=>$offer]);
    }
}
