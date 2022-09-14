<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'total_money'
    ];

}
