<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function order(){
        return $this->hasMany(Order::class,'order_id','id');
    }
    public function items(){
        return $this->hasMany(Product::class,'product_id','id');
    }
}