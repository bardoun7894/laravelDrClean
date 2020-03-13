<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
  protected $fillable = [ 'user_id','order_id','status','adress','estimated_time' ];



    public function costumer(){
        return $this->belongTo(User::class);
                              }
    public function order(){
        return $this->belongTo(Order::class);
                           }
    
}
