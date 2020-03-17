@extends('layouts.app')


@section('content')
<div class="container"> 
    <div class="col-md-12">
         <div class="card">
         <div class="card-header">Clothes <a class="btn btn-primary"  href="{{route('new-cloth')}}"> new cloth</a></div>
               <div class="card-body">
                <div class="row">
                   @foreach ($clothes as $cloth)
                     <div class="col-md-6">
                        <div class="alert alert-primary" role="alert">
                         <h5> name : {{ $cloth-> name }}</h5> 
                          <h5> Price : {{$currency_code}}{{$cloth->price }}</h5> 
     <img class="img-thumbnail card-img" src=" {{asset('storage/image/'.$cloth->images->url)}}"  width="100px;" height="100px;" alt="image" />
     
     <a class="btn btn-success mt-2"  href="{{ route('update-cloth',['id'=>$cloth->id]) }}"> update cloth</a>
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

@if(Session::has('message'))
  <div class="toast" style="position: absolute;z-index:99999; top: 5%; right: 5%;">
    <div class="toast-header">
      <strong class="mr-auto">Users</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
     <span aria-hidden="true">&times</span>
      </button>
    </div>
    <div class="toast-body">
         
              {{Session::get('message')}}
          
    </div>
  </div>
  @endif
</div>
@endsection