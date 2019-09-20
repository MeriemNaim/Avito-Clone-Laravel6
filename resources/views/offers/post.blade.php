@extends('layouts.app')
@section('content')
<div class="container" >
  <div class="center-block" >
    <a class="btn btn-info m-2" href="{{url('/offers/create')}}">Got an offer</a>
  </div>
	<div class="row bg-info p-3 m-2 ">
    <div class=" p-3 mb-2 bg-dark text-white text-center col">
      
      {{$offer->title}} 
      
    </div>
<div class=" text-white text-center col-12 p-3 m-2 " >
<!-- slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('storage/'.$offer->image1)}}" class="d-block w-100 h-50" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/'.$offer->image2)}}" class="d-block w-100 h-50" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/'.$offer->image3)}}" class="d-block w-100 h-50" src="..." alt="Third slide">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/'.$offer->image4)}}" class="d-block w-100 h-50" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider -->

<div class="p-3 m-2">
  {{ $offer->description}}
</div>

</div>
</div>



	

</div>

@endsection
