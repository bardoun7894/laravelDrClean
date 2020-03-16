<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url','clothes_id'];
 
public function clothes(){
    return $this->belongTo(Clothes::class);
}

}