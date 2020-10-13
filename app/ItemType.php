<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    protected $table = 'item_types';
    protected $fillable = ['type_name', 'sort'];

    public function items()
    {
        // return $this->hasMany('App\Item', 'type_name');//進入items的資料表中搜尋type_name的欄位，不過id或type_id都會找到id
        return $this->hasMany('App\Item', 'type_id');
    }
}
