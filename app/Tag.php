<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'id',
        'value',
        'description'
    ];

    public function tasks ()
    {
        return $this->belongsToMany(Task::class, 'task_tags');
    }
}
