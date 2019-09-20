<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

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