<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Clothes;
use App\Image;

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
       }
       public function newCloth($id=null){
        $images=Image::all();
        $clothes=null;
        if(!is_null($id)){
          $clothes=Clothes::with([
            'clothes'=>$clothes,
            'images'=>$images
          ])->find($id);
      
            }
          
       return view('admin.clothes.new-cloth')->with([
              'clothes'=>$clothes,
              'images'=>$images
            ]);

           
       }
       public function delete($id){

 
       }
 public function store(Request $request){


  $images=new Image();
  $request->validate([
          'name'=>'required',
          'quantity'=>'required',
          'price'=>'required', 
          'total'=>'required', 
          'image'=>'required', 
         ]);
         $clothes=new Clothes();
         $clothes->name= $request->input('name');
         $clothes->quantity=intval( $request->input('quantity'));
         $clothes->price= doubleval($request->input('price'));
         $clothes->total= doubleval($request->input('total'));
      
        if($request->hasfile('image')){

        $file=$request->file('image');
  
        $extension=$file->getClientOriginalExtension();//getting image extension
      
        $filename=time().'.'.$extension;
     
      $path=$file->storeAs('public/images/',$filename);
   //     $file->move('app\public\image');
        $images->url=$filename;
       
        }else{
          return $request;
          $images->url='';
        } 

         $clothes->save();
         $images->clothes_id=$clothes->id;
         $images->save();
         Session::flash('message','User '.$clothes->name.' has been added Successfully');
         return redirect(route('clothes'));
 
      }


      public function update($id,Request $request){
        $clothes=Clothes::find($id);
      }
     
      
      
      
      }