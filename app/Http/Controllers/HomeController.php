<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\City;
use App\Offer;
use App\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $cat=Category::all();
         $city=City::all();
        return view('home',['categories'=>$cat],['cities'=>$city]);
    }
    public function search(Request $request)
    { 
        $searchTitle = request('title');
        $searchCategory = request('category');
        $searchCity = request('city');
        $cat = Category::findOrFail($searchCategory);
        $city = City::findOrFail($searchCity);
        $offer=null;

        if($searchTitle || $searchCategory || $searchCity) {


        $offer = Offer::when($searchTitle, function ($query) use ($searchTitle) {
                return $query->where('title', 'like', "%{$searchTitle}%")
                    ->orWhere('description', 'like', "%{$searchTitle}%");
            })
            ->when($searchCategory, function ($query) use ($searchCategory) {
                return $query->whereHas('category', function ($query) use ($searchCategory) {
                    $query->where('id', $searchCategory);
                });
            })
            ->when($searchCity, function ($query) use ($searchCity) {
                return $query->whereHas('city', function ($query) use ($searchCity) {
                    $query->where('id', $searchCity);
                });
            })

            ->paginate(14)
            ->appends(request()->query());

    }

    return view('searchR', compact('offer','cat','city'));

        
    }
}
