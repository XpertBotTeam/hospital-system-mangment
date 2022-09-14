<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','charge','doctor_commission'
    ];

    public function services(){
        return $this->belongsToMany(Service::class);
    }

}
