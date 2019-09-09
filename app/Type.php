<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    Protected $fillable = [
        'name',
        'group_id',
        'task_division_id',
        'task_id'
    ];
}
