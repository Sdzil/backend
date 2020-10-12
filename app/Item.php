<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'itemName', 'price', 'image_url', 'content', 'type_id'
    ];

    public function itemsType_5566()
    {
        return $this->belongsTo('App\ItemType','id');
    }
}

