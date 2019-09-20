<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{  /**
     * 
     */
    public $id;

    /**
     * 
     */
    public $name_cat;


    /**
     * 

Default constructor
     */
    public function __construct() {
    }

}