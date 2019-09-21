<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    Protected $fillable = [
        'username',
        'group_name'
       
    ];

    public function types(){
        return $this->hasMany(Type::class, 'group_id','id');
    }
}
