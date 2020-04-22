<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    protected $fillable = ['label'];

    public function flags(){
       return $this->hasMany(Flag::class);
    }
}
