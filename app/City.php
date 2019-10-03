<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
 public function offer()
    {
        return $this->hasMany('App\Offer');
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