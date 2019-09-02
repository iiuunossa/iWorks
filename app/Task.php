<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    Protected $fillable = [
        'task_group',
        'detail',
        'date_beg',
        'date_end',
        'status'
    ];
}
