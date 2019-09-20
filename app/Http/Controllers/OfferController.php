<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Offer;
use App\User;
use Auth;
class OfferController extends Controller
{      


    public function index()
    {
        $offers = Offer::all();
        $cat=Category::all();
        $city=City::all();
        return view('offers.index',compact('offers'),['categories'=>$cat],['cities'=>$city]);
    }
 
    public function create()
    {
        $cat=Category::all();
        $city=City::all();
        return view('offers.create',['categories'=>$cat],['cities'=>$city]);
    }
 
    public function storeOffer(Request $request)
    {
        $offer=new Offer();
        $user = Auth::user();

        $id = $user->id;
        for($i = 1 ; $i<=4 ; $i++) {
            $img = $request->file('image'.$i);
            $imageName = rand(40, 543535). '.' . $img->getClientOriginalExtension();
            request('image'.$i)->move(public_path('storage'), $imageName);
                if($i == 1) {
                    $offer->image1 = $imageName;
                
                } elseif($i == 2) {
                    $offer->image2 = $imageName;

                } elseif($i == 3) {
                    $offer->image3 = $imageName;

                } else {
                    $offer->image4 = $imageName;

                }

            } 

        $offer->title = request('title');
        $offer->description = request('description');
        $offer->id_city = request('city');
        $offer->id_category = request('cat');
        $offer->user_id =$id;
        $offer->save();
        return redirect('/offers');
 
    }


    public function show($id)
    {  $offer=Offer::where('id', $id)->firstOrFail();
        return view('offers.post', ['offer'=> $offer]);
    
    }

}
