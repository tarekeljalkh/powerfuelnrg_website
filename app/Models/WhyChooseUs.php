<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'second_title',
        'description',
        'icon',
        'image',
        'skill_1', 'percentage_1',
        'skill_2', 'percentage_2',
        'skill_3', 'percentage_3',
    ];
}
