<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task_name', 'description', 'time'];

    public function tasks(){
       return $this->hasMany(Task::class);
    }
}


