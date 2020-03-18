<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
 public function index(){
    $services=Service::paginate(16);
    return view('admin.servicesa.services')->with(
        [ 'services' =>$services]
    );
 }
}
