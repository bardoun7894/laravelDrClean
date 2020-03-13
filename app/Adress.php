<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{ 
    protected $fillable = [
        'user_id','street_name','street_number' ,'city' ,'state' ,'post_code' 
       ];

public function user(){
    return $this->belongsTo(User::class);
}

    
}
