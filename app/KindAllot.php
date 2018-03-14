<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KindAllot extends Model
{
    protected $fillable = [
        'user_id',
        'kind_id',
        'ratio',
        'memo',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function kind(){
        return $this->belongsTo('App\Kind');
    }
}
