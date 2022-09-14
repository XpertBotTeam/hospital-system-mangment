<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayoffSchedule extends Model
{
    protected $fillable = [
        'date','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
