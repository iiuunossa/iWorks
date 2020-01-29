<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pa extends Model
{
    Protected $fillable = [
        'sapid',
        'year',
        'round',
        'name',
        'group_id',
        'weight'

    ];

    public function types(){
        return $this->hasMany(Type::class, 'pa_id','id');
    }

    public function group(){
        return $this->belongsTo(Group::class,'group_id');
    }

    public function taskDivisions() {
        return $this->belongsToMany(TaskDivision::class,'pa_task_divisions')->withTimestamps();
    }
}
