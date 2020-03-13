<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothes;

class ClothesController extends Controller
{
   public function index(){

    $clothes =Clothes::with(['images'])->paginate(16);
    $currency_code=env("CURRENCY_CODE","RM");
  // return $clothes;
    return view('admin.clothes.clothes')->with(
        ['clothes' =>$clothes,
        'currency_code'=>$currency_code
        ]);
   }
}
