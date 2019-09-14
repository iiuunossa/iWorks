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
        'pa_weight'
       
    ];
}
