<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDetail extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function productDetails(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}