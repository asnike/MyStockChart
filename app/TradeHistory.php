<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradeHistory extends Model
{
    protected $fillable = [
        'user_id',
        'user_item_id',
        'account_id',
        'date',
        'price',
        'cnt',
        'trade_type_id',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function item(){
        return $this->belongsTo('App\UserItem');
    }
    public function account(){
        return $this->belongsTo('App\Account');
    }
    public function type(){
        return $this->belongsTo('App\TradeType');
    }
}
