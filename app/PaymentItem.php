<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentItem extends Model
{
    protected $fillable = [
        'code','name','price','type','commission','quantity'
    ];

    public function payments(){
        return $this->belongsToMany(Payment::class)->withPivot('payment_item_quantity');
    }
}
