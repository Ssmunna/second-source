<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected  $fillable = [
        'title',
        'subtitle',
        'page',
        'button_text',
        'button_link',
        'image',
        'video',
        'status',
    ];
}
