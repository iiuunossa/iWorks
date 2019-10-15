<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pa extends Model
{
    Protected $fillable = [
        'sapid',
        'pa_year',
        'pa_round',
        'pa_name',
        'group_id',
        'pa_weight'
       
    ];

    public function types(){
        return $this->hasMany(Type::class, 'pa_id','id');
    }
}
