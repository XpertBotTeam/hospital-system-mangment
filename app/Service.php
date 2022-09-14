<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'department_id','name','charge','doctor_commission'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function patients(){
        return $this->belongsToMany(User::class);
    }

    public function servicePackages(){
        return $this->belongsToMany(ServicePackage::class);
    }
}
