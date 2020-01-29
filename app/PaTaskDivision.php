<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaTaskDivision extends Model
{

    Protected $fillable = [
        'pa_id',
        'task_division_id'
       
    ];

    public function tasks(){
        return $this->hasMany(Task::class, 'task_id','id');
    }

    public function taskdivision(){
        return $this->belongsTo(TaskDivision::class,'task_division_id');
    }
}
