<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSupport extends Model
{
   protected $fillable=[
      'title','message','support_type','user_id','clothes_id'
   ];
}
