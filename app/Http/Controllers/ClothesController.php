<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothes;

class ClothesController extends Controller
{
   public function index(){

    if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
      // Ignores notices and reports all other kinds... and warnings
      error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
      // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
      }
    $clothes =Clothes::with(['images'])->paginate(16);
    $currency_code=env("CURRENCY_CODE","RM");
  // return $clothes;
    return view('admin.clothes.clothes')->with(
        ['clothes' =>$clothes,
        'currency_code'=>$currency_code
        ]); 
       }  }