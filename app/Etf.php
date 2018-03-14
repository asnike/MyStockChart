<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etf extends Model
{
    protected $fillable = [
        'kind_id',
        'etf_type_id',
        'brand',
        'index_tracked',
        'inception',
        'tax',
        'expense_ratio',
        'volatility',
        'method,'
    ];
    public function kind(){
        return $this->belongsTo('App\Kind');
    }
    public function type(){
        return $this->belongsTo('App\EtfType');
    }
    public function item(){
        return $this->morphTo('App\Item', 'assetable');
    }
}
