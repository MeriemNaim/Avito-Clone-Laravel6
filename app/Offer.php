<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\City;

class Offer extends Model

{ 
    public function categories()
    {
        return $this->hasOne(Category::class,'id_category');
    }

    public function cities()
    {
        return $this->hasOne(City::class,'id_city');
    }

    public function users()
    {
        return $this->hasMany(User::class,'user_id');
    }

    // /**
    //  * 
    //  */
    // public $id;

    // /**
    //  * 
    //  */
    // public $title;

    // /**
    //  * 
    //  */
    // public $desciption;

    // /**
    //  * 
    //  */
    // public $image1;

    // /**
    //  * 
    //  */
    // public $image2;

    // /**
    //  * 
    //  */
    // public $image3;

    // /**
    //  * 
    //  */
    // public $image4;

    // /**
    //  * 
    //  */
    // public $id_city;

    // /**
    //  * 
    //  */
    // public $id_user;

    // /**
    //  * 
    //  */
    // public $id_category;

    // /**
    //  * 
    //  */
    // public $is_approved;

    // /**
    //  * 
    //  */
    // public $created_at;

    // /**
    //  * 
    //  */
    // public $updated_at;




    // /**
    //  * Default constructor
    //  */
    // public function __construct() {
    // }

    // /**
    //  * 
    //  */
    // public function addAnnonce() {
    //     // TODO implement here
    // }

    // /**
    //  * 
    //  */
    // public function updateAnnonce() {
    //     // TODO implement here
    // }

    // /**
    //  * 
    //  */
    // public function deactivateAnnonce() {
    //     // TODO implement here
    // }

    // /**
    //  * 
    //  */
    // public function shareAnnonce() {
    //     // TODO implement here
    // }

}