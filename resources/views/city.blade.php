@extends('layouts.app')
@section('content')


<div class="container text-center ">
  <h1 class="  font-weight-light text-center  mt-4 mb-0">pick a city</h1>
  <hr class="mt-2 mb-5">
  <div class="row text-center text-lg-left">
@foreach($cities as $city)
		<div class="col-lg-4 col-md-4 col-6">
		<a href="{{ url('filterby/bycity/'. $city['id']) }}" class="text-dark text-center d-block mb-4 h-100">
		<img class="img-fluid img-thumbnail" src="{{ $city['src_city'] }}" alt="">
		{{ $city['name_city'] }}</a> 

		</div>
@endforeach
  </div>
</div>

@endsection