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
        $start = \Carbon\Carbon::createFromFormat('H:i:s',$this->beg_time);
        $stop = \Carbon\Carbon::createFromFormat('H:i:s',$this->end_time);
        return $start->diffInHours($stop);
        // return $start->diffInMinutes($stop);
        return date('h:i', strtotime($this->end_time) - strtotime($this->beg_time));

    } 
}