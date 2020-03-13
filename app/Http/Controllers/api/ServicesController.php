<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServicesResource;
use App\service;

class ServicesController extends Controller
{
    public function index(){
        return ServicesResource::collection(service::paginate());
    }
}
