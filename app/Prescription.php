<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doctor_id','patient_id','blood_pressure','diabetes','symptoms','diagnosis','advice','date'
    ];

    public function doctor(){
        return $this->belongsTo(User::class);
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function medicines(){
        return $this->belongsToMany(Medicine::class)->withPivot('instructions');
    }

}
