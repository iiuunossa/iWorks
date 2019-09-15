<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    Protected $fillable = [
        'type_id',
        'detail',
        'date',
        'beg_time',
        'end_time',
        'status'
    ];

    public function type(){
        return $this->belongsTo(Type::class,'type_id');
    }


    Public function getDiffTime()
    {
        return date('h:i', strtotime($this->end_time) - strtotime($this->beg_time));

    } 
}
