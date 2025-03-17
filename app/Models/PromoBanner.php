<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromoBanner extends Model
{
    protected $table = 'promo_banners';

    protected $fillable = [
        'title',
        'description',
    ];

}
