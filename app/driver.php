<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    static public function getAvailable($status){
            if($status == 0){
                $obj = '<label class="btn btn-primary"> Available</label>';
        } else{
                $obj = '<label class="btn btn-danger">Not Available</label>';
        }
        return $obj;
    }

    public function car()
    {
        return $this->belongsTo('App\car');
    }

}
