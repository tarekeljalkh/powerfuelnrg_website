<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'first_image', 'second_image', 'third_image'];
}
