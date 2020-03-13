@extends('layouts.app')


@section('content')
<div class="container"> 
    <div class="col-md-12">
         <div class="card">
             <div class="card-header">Clothes</div>
               <div class="card-body">
                <div class="row">
                   @foreach ($clothes as $cloth)
                     <div class="col-md-6">
                        <div class="alert alert-primary" role="alert">
                           <h5> name : {{ $cloth-> name }}</h5> 
                          <h5> Price : {{$currency_code}}{{$cloth->price }}</h5> 
                        {!! (count($cloth->images)>0) ?'<img class="img-thumbnail card-img"src="'.$cloth->images->url.'"/>' : '.'!!}
         
                   </div>
                      </div>
                   @endforeach 
                </div>
                {{$clothes->links()}}
            </div>


         </div>
         
    </div>
</div>
   

</div>
@endsection