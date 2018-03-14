<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    protected $fillable = [
        'user_id',
        'item_id',
        'visibility',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function item(){
        return $this->belongsTo('App\Item');
    }
}
