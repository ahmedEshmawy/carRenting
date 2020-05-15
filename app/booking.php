<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    public function car()
    {
       return $this->hasOne('App\car');
    }
}
