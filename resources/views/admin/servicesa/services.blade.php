@extends('layouts.app')


@section('content')
<div class="container"> 
    <div class="col-md-12">
         <div class="card">

             <div class="card-header">Services</div>

            <div class="card-body">
                <div class="row">
                   @foreach ($services as $service)
                     <div class="col-md-3">
                        <div class="alert alert-primary" role="alert">
                        <p>{{$service -> service_type}}</p>  
                        </div>

                      </div>
                   @endforeach

                </div>
                
            </div>


         </div>
         
    </div>
</div>
   

</div>
@endsection