<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticItem extends Model
{

    protected $table = 'static_items';

    protected $fillable = [
        'text1',
        'image1',
        'image2',
        'image3',
        'logo1',
        'logo2',
        'logo3',
        'logo4',
        'logotext1',
        'logotext2',
        'logotext3',
        'logotext4',
        'text2',
        'text3',
        'text4',
        'text5',
        'text6',
        'image4',
        'image5',
        'image6',
    ];

    use HasFactory;
}
