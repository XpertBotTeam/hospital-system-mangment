<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
}
