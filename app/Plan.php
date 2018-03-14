<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'user_id',
        'section_ratio',
        'price_ratio',
        'kind_id',
        'user_item_id',
        'name',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function item(){
        return $this->belongsTo('App\UserItem');
    }

}
