<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attraction extends Model
{
    //
    protected $fillable = [
        'email', 'location', 'image_src', 'location_name', 'info'
    ];

    protected $table = "attractions";
}
