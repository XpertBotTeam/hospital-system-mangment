<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseHistory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id','date','title','food_allergies','bleed_tendency','heart_disease','blood_pressure','diabetic','surgery','accident','family_medical_history','current_medication','female_pregnancy','breast_feeding','health_insurance','low_income','reference','others','status'
    ];
    public function patient(){
        return $this->belongsTo(User::class);
    }
}
