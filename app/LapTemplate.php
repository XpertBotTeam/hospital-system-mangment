<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LapTemplate extends Model
{
    protected $fillable = [
        'name','template'
    ];

    public function lapReport(){
        return $this->belongsToMany(LapReport::class);
    }
}
