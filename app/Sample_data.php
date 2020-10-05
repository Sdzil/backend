<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_data extends Model
{

    protected $table = 'sample_datas';

    protected $fillable =[
        'id', 'first_name', 'last_name', 'created_at', 'updated_at'
    ];
}
