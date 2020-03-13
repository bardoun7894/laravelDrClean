<?php

namespace App\Http\Controllers\api;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Request;
use App\Image;
use App\Http\Controllers\Controller;

class  ImageController extends Controller
{

    public function index(){
        return ImageResource::collection(Image::paginate());
       }
}
