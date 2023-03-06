<?php

namespace App\Models;

use App\Models\Union;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Upazilla extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function union(){
        return $this->hasMany(Union::class,'upazilla_id','id');
    }
}