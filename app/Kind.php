<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
    ];
}
