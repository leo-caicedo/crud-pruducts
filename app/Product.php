<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
	'product_name', 'brand_id', 'size', 'remarks', 'stock', 'date_of_shipment'
    ];

    protected $dates = ['date_of_shipment'];

    public function brand()
    {
	return $this->belongsTo(Brand::class);
    }
}
