<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{ 
 protected $fillable = [
        'cart_item','total' 
       ];
       
  public function users(){
    return $this->hasMany(User::class);
}
public function order(){
    return $this->belongsTo(Order::class);
}

public function cartItems(){
    //TODO : Parse items and return array clothes IDs

}
public function inItems($clothes_id){
//Todo :check id the clothes id in items

}
}
