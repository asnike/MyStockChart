<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $fillable = [
        'user_id',
        'user_item_id',
        'title',
        'content',
        'is_notice',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function item(){
        return $this->belongsTo('App\UserItem');
    }
}
