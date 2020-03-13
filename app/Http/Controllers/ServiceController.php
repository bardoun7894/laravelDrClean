<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
 public function index(){
    $services=Service::paginate();
    return view('admin.servicesa.services')->with(
        [ 'services' =>$services]
    );
 }
}
