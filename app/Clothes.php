<?php

namespace App;
use App\User;
use App\service;
use Illuminate\Database\Eloquent\Model;
class Clothes extends Model
{
    protected $fillable = [
    'name','user_id','image_id','service_id','quantity','price','total'
       ];
       public function users(){
           return $this->belongsTo(User::class);
       }
       public function images(){
        return $this->hasOne(Image::class);  
        }
        public function services(){
            return $this->belongTo(Service::class);  
            }
        
}
