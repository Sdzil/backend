<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = [
        'email', 'location', 'image_url', 'placeName', 'info'
    ];

}
