<?php

namespace App;
use App\Clothes;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = [ 'service_type'];

  public function clothes(){
     return $this->hasMany(Clothes::class);
    }
    


}
