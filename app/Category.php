<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Offer;

class Category extends Model

{  
    public function offer()
    {
        return $this->hasMany(Offer::class);
    }


    public $id;


    // public $name_cat;


    public function __construct() {
    }

}