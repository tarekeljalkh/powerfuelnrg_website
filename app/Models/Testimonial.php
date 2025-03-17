<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'client_name',
        'client_role',
        'client_image',
        'testimonial',
    ];

}
