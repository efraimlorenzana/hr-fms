<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    // public function records()
    // {
    //     return $this->hasMany(Record::class);
    // }
}
