<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
     'amount','user_id','order_id','paid_on','payment_reference' 
    ];

    public function costumer(){
        return $this->belongTo(User::class);
    }

    public function order(){
        return $this->belongTo(Order::class);
    }
    

}
