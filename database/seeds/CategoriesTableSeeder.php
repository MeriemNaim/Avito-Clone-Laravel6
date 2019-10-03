<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\City::class, 10)->create()->each(function ($cit) {
        $cit->offer()->save(factory(App\Offer::class,rand(5,20))->make());
        });
    }
}
