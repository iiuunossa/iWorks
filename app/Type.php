<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    Protected $fillable = [
        'type_name',
        'group_id',
        'task_division_id',
        'pa_id'
    ];

    public function tasks(){
        return $this->hasMany(Task::class, 'type_id','id');
    }

    public function group(){
        return $this->belongsTo(Group::class,'group_id');
    }

    public function task_division(){
        return $this->belongsTo(TaskDivision::class,'task_division_id');
    }
 
    public function pa(){
        return $this->belongsTo(Pa::class,'pa_id');
    }
}
