<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function files()
    {
        return $this->belongsToMany(File::class)->withPivot(['id']);
    }
}
