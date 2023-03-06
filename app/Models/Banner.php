<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Console\Application;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function getImageAttribute($value): string|UrlGenerator|Application
    {
        if($value){
            return Storage::url('banner/'.$value);
        }
        return url('public/images/user.jpg');
    }
}