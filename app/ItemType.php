<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    protected $table = 'item_types';
    protected $fillabled = ['type_name'];

    public function items()
    {
        return $this->hasMany('App\Item', 'type_id');
    }
}
