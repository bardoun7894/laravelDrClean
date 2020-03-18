<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','last_name','number_phone','adress_id','email','password','api_token'];
    /**
     * The attributes that should be hidden for arrays.
       @var array */
    protected $hidden = [ 'password', 'remember_token'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  public function orders(){
     return $this->hasMany(Order::class);
    }
  public function payments(){
    return $this->hasMany(Payments::class);
  }
  public function delivering(){
       return $this->hasMany(Delivering::class);
   }
  public function collections(){
    return $this->hasMany(Collection::class);
  } 
  public function adresses(){
        return $this->hasOne(Adress::class);
  } 
  public function roles(){
    return $this->belongsToMany(Role::class);
            } 
    public function cart(){
              return $this->hasOne(Cart::class);
            }





}
  