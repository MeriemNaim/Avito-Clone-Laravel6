<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Offer;
use App\Category;
use App\User;
use App\City;
use Faker\Generator as Faker;

$factory->define(App\Offer::class, function (Faker $faker) {
    return [
    	'title' => $faker->Title,
        'description' => $faker->text,
        'image1' => $faker->randomElement(['508825.jpg', '508569.png','508569.png','542709.jpg']),
        'image2' => $faker->randomElement(['508825.jpg', '508569.png','508569.png','542709.jpg']),
        'image3' => $faker->randomElement(['508825.jpg', '508569.png','508569.png','542709.jpg']),
        'image4' => $faker->randomElement(['508825.jpg', '508569.png','508569.png','542709.jpg']),

        // 'user_id' => function(){
        //     return factory('App\User')->create()->id;
        // },
        // 'id_category' => function(){
        //     return factory('App\Category')->create()->id;
        // },
        // 'id_city' => function(){
        //     return factory('App\City')->create()->id;
        // },

        'user_id' => $faker->randomElement(['1', '2']),
        'id_category' => $faker->numberBetween($min = 1, $max =6),
         'id_city' => $faker->numberBetween($min = 1, $max =10),


       
    ];
    });







