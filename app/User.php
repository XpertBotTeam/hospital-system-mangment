<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email', 'password','national_id','address','picture','birth_date','gender','phone','mobile','emergency','type','medical_degree','specialist','biography','educational_qualification','blood_group'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Scopes
    public function scopeEmployee($query)
    {
        return $query->whereType('admin')->whereType('doctor')->whereType('patient');
    }

    public function scopeAdmin($query)
    {
        return $query->whereType('admin');
    }

    public function scopeDoctor($query)
    {
        return $query->whereType('doctor');
    }

    public function scopePatient($query)
    {
        return $query->whereType('patient');
    }

    public function scopeNurse($query)
    {
        return $query->whereType('nurse');
    }

    public function scopeAccountant($query)
    {
        return $query->whereType('accountant');
    }

    public function scopePharmacist($query)
    {
        return $query->whereType('pharmacist');
    }

    public function scopeLaboratorist($query)
    {
        return $query->whereType('laboratorist');
    }

    public function scopeReceptionist($query)
    {
        return $query->whereType('receptionist');
    }


    // Relation Ships
    // Global Relations
    public function departments(){
        return $this->belongsToMany(Department::class);
    }

    public function timeSchedules(){
        return $this->hasMany(TimeSchedule::class);
    }

    public function dayoffSchedules(){
        return $this->hasMany(DayoffSchedule::class);
    }
    // Doctor & Patient Relations
    public function prescriptions(){
        return $this->hasMany(Prescription::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
    // Patient Relations
    public function casesHistories(){
        return $this->hasMany(CaseHistory::class);
    }

    public function documents(){
        return $this->hasMany(Document::class);
    }

    public function bedAllotments(){
        return $this->hasMany(BedAllotment::class);
    }

    // Short Cuts
    public function hasDepartment($departmentId){
        return in_array($departmentId,$this->departments->pluck('id')->toArray());
    }
}
