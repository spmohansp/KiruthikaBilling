<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    public function Client(){
        return $this->hasOne(Client::class,'id','client_id');
    }
}
