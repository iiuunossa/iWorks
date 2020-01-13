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
        'pa_group_id',
        'pa_weight'

    ];

    public function types(){
        return $this->hasMany(Type::class, 'pa_id','id');
    }

    public function group(){
        return $this->belongsToMany(Group::class,'group_id');
    }

    public function taskDivisions() {
        return $this->belongsToMany(TaskDivision::class,'pa_task_divisions')->withTimestamps();
    }
}
