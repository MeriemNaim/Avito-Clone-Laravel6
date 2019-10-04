@extends('layouts.app')
@section('content')
<div class="container justify-content-center text-center ">
	<h1 class="text-center">all the the offers in <span class="text-danger">{{$categories['name_cat'] }}</span> </h1>
	<div class="row">

		@foreach ($off as $offer)
		
<div class="border border-white text-white text-center col-3 p-3 m-2 bg-info" >
<!-- 	<h6>All the images</h6> -->
<img src="{{ asset('storage/'.$offer->image1)}}" style="width:100px;height:100px" alt="image1" class="img-thumbnail border border-dark">
<h6 class="text-dark" >{{ $offer->title }} </h6>
<h6>{!! substr($offer["description"], 0, 140) !!}</h6>
<a class="btn btn-dark center m-2 center" href="{{ url ('offers/post/'.$offer->id) }}">more details</a>
</div>

@endforeach
</div>
</div>


@endsection