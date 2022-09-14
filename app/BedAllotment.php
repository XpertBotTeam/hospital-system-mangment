<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BedAllotment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bed_id','patient_id','start_date','start_time','end_date','end_time','status'
    ];

    public function bed(){
        return $this->belongsTo(Bed::class);
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

}
