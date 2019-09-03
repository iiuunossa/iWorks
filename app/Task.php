<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    Protected $fillable = [
        'task_group',
        'detail',
        'date',
        'beg_time',
        'end_time',
        'status'
    ];
}
