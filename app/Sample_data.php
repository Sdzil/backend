<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_data extends Model
{

    protected $table = 'users';

    protected $fillable =[
        'id', 'name', 'email', 'created_at', 'updated_at'
    ];
}
