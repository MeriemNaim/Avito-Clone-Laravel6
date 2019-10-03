<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\City::class, 10)->create()->each(function ($c) {
        $c->offer()->save(factory(App\Offer::class,,rand(5,20))->make());
        });
       
    }
}
