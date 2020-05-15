<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;


class User extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $guarded = [];

    static public function role($role_id){
            if($role_id == 1){
                $obj = '<label class="btn btn-primary"> Admin</label>';
        } else{
                $obj = '<label class="btn btn-danger"> User</label>';
        }
        return $obj;
    }



    public function bookings()
    {
        return $this->hasMany(\App\booking::class);
    }
    
}
