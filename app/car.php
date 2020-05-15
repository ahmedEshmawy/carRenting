<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    static public function getActive($status){
            if($status == 1){
                $obj = '<label class="btn btn-primary"> Active</label>';
        } else{
                $obj = '<label class="btn btn-danger">Not Active</label>';
        }
        return $obj;
    }

    static public function getAvailable($availability){
        if($availability == 1){
            $obj = '<label class="btn btn-primary"> Available</label>';
    } else{
            $obj = '<label class="btn btn-danger">Not Available</label>';
    }
    return $obj;
    }

    public function booking()
    {
         return $this->belongsTo('App\booking');
    }

    public function driver()
    {
         return $this->hasOne('App\driver');
    }
}
