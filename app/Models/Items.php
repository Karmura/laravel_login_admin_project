<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $guarded = [];

    public function images(){
        return this->haveMany(Images::class);
    }

    protected $fillable = [
        "text1",
        "text2",
        "text3",
        "text4",
        "text5",
        "text6",
        "image1",
        "image2",
        "image3",
        "image4",
        "image5",
        "image6",
    ];
}
