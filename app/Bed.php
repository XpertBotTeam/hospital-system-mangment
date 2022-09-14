<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'department_id','code','status','notes'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function bedallotments(){
        return $this->hasMany(BedAllotment::class);
    }
}
