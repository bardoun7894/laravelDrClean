<?php

namespace App\Http\Controllers\Api;

use App\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServicesResource;
use App\Http\Resources\clothesResource;
use App\service;

class ServicesController extends Controller
{
    public function index(){
        return ServicesResource::collection(service::paginate());
    }
    public function show($id){
        return new ServicesResource(Service::find($id));
    }

    public function clothes($id){
        $service =Service::find($id);
        return clothesResource::collection($service->clothes()->paginate());

    }
}
