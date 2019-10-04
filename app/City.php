<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Offer;

class City extends Model
{
 public function offer()
    {
        return $this->hasMany(Offer::class);
    }

   /**
     * 
     */
    public $id;

    /**
     * 
     */
    public $name_city;


    /**
     * Default constructor
     */
    public function __construct() {
    }

}