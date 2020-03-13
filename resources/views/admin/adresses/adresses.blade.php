@extends('layouts.app')


@section('content')
<div class="container"> 
    <div class="col-md-12">
         <div class="card">
             <div class="card-header">Adresses</div>
               <div class="card-body">
                <div class="row">
                   @foreach ($adresses as $adress)
                     <div class="col-md-6">
                        <div class="alert alert-primary" role="alert">
                          <h5> street_name :{{$adress->street_name }}</h5> 
                          <h5> name :{{$adress->street_number }}</h5> 
                          
                      </div>
                      </div>
                   @endforeach 
                </div>
                {{$adresses->links()}}
            </div>


         </div>
         
    </div>
</div>
   

</div>
@endsection