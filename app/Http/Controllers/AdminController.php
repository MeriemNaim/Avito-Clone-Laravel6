<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Category;
use App\City;
use App\Offer;


class AdminController extends Controller
{
   public function index()
    { 
    $user=User::all();
    $cat=Category::all();
    $city=City::all();
    return view('admin.index',['us'=>$user],['categories'=>$cat],['ct'=>$city]);
}
public function test()
    { 
    $user=User::all();
    $cat=Category::all();
    $city=City::all();
    return view('admin.aduser.users',['us'=>$user],['categories'=>$cat],['ct'=>$city]);
}
public function adf()
    { 
    $user=User::all();
    $offer=Offer::all();
    return view('admin.adoffer.offer',['us'=>$user],['off'=>$offer]);
}

 public function editoffer($id)
        {   
            $user=User::all();
            $cate=Category::all();
            $cities=City::all();
            $offer=Offer::where('id', $id)->firstOrFail();
            return view('admin.adoffer.editoffer',['offer'=>$offer],compact('user'),compact('cate'),compact('cities'));

        }
        public function dltoffer($id)
        {
            $offer = Offer::findOrFail($id);
            if ($offer->is_deleted=='1') {
                $offer->is_deleted='0';
                $offer->is_approved='0';
            } 
            else {
                $offer->is_deleted='1';
            }
            // $offer->is_deleted =  ($offer->is_deleted =='1') ? '0' : '1' ;
            $offer->save();
            return Redirect::back()->with('message','the post is deleted!');
        }

        public function apoffer($id)
        {
            $offer = Offer::findOrFail($id);
            if ($offer->is_approved=='1') {
                $offer->is_approved='0';
        
            } 
            else {
                $offer->is_approved='1';
            }
            $offer->save();
            return Redirect::back()->with('message','the post is approved!');

        }
        public function upuser($id)
        {
            $offer = Offer::findOrFail($id);
            if ($offer->is_approved=='1') {
                $offer->is_approved='0';
        
            } 
            else {
                $offer->is_approved='1';
            }
            $offer->save();
            return Redirect::back()->with('message','the post is approved!');

        }

public function dltuser($id)
        {
            $user = User::findOrFail($id);
            if ($user->isdeleted=='1') {
                $user->isdeleted='0';
        
            } 
            else {
                $user->isdeleted='1';
            }
            $user->save();
            return Redirect::back()->with('message','the post is approved!');

        }









}
