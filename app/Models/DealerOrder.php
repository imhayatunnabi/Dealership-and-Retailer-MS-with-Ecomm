<?php

namespace App\Models;

use App\Models\DealerOrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DealerOrder extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function details(){
        return $this->hasMany(DealerOrderDetail::class,'order_id','id');
    }
}