<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}