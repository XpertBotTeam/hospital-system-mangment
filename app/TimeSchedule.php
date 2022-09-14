<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSchedule extends Model
{
    protected $fillable = [
        'week_day','week_num','start_time','end_time','duration','user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
