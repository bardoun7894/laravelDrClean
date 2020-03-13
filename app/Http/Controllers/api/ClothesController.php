<?php

namespace App\Http\Controllers\api;
use App\Clothes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\clothesResource;

class  ClothesController extends Controller
{
    public function index(){
       return clothesResource::collection(Clothes::paginate());
    }
 
}
