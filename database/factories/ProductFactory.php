<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
	'product_name' => $faker->word,
	'brand_id' => $faker->numberBetween(1, 3),
	'size' => 'M',
	'remarks' => $faker->text,
	'stock' => $faker->numberBetween(50, 100),
	'date_of_shipment' => $faker->date
    ];
});
