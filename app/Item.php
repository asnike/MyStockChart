<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_type_id',
        'code',
        'name',
    ];
    public function type(){
        return $this->belongsTo('App\ItemType');
    }
    public function assetable(){
        return $this->morphTo();
    }
}
