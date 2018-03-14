<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'kind_id',
        'market',
        'volume',
        'regdate',
    ];
    public function kind(){
        return $this->belongsTo('App\Kind');
    }
    public function item(){
        return $this->morphTo('App\Item', 'assetable');
    }
}
