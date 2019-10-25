<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskDivision extends Model
{
    Protected $fillable = [
        'task_division_name',
        'division_id'
       
    ];

    public function types(){
        return $this->hasMany(Type::class, 'task_division_id','id');
    }

    public function pas() {
        return $this->belongsToMany(Pa::class,'pa_task_divisions')->withTimestamps();
    }
}
