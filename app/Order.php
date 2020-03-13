<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 
        'user_id','payment_id','cart_id','order_date','collection_id','delivery_id' 
       ];
public function costumer(){
    return $this->belongTo(User::class);
}
public function carts(){
    return $this->hasOne(Cart::class);
}
public function payments(){
    return $this->hasOne(Payments::class);
}


}
