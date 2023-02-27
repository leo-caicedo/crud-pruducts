<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	factory(App\Brand::class, 3)->create();
	factory(App\Product::class, 10)->create();
    }
}
