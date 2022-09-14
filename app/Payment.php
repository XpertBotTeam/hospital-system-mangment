<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'patient_id','doctor_id','sub_total','taxes','total','amount_received','amount_to_pay','doctor_commission'
    ];

    public function paymentItems(){
        return $this->belongsToMany(PaymentItem::class)->withPivot('payment_item_quantity');
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsTo(User::class);
    }
}
