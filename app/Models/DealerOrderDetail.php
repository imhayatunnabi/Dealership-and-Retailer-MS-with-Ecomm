<?php

namespace App\Models;

use App\Models\DealerOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DealerOrderDetail extends Model
{
    use HasFactory;
    public function order(){
        return $this->belongsTo(DealerOrder::class,'order_id','id');
    }
    public function items(){
        return $this->hasMany(Product::class,'product_id','id');
    }
}