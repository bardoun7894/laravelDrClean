<?php

namespace App\Http\Controllers;
use App\Adress;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function index(){
    $adresses =Adress::paginate(16);
  
    return view('admin.adresses.adresses')->with(
        ['adresses' =>$adresses, ]);
}
}