@extends('layouts.app')
@section('content')
<style type="text/css">
	li {
  list-style-type: none;
}
</style>

<div class="container" >
	<a class="btn btn-info center m-2 center" href="{{url('/offers/create')}}">Create a Post </a>
	<div class="row">
		@foreach ($offers as $offer)
<div class="border border-white text-white text-center col-2 p-3 m-2 bg-info" >
<!-- 	<h6>All the images</h6> -->
<img src="{{ asset('storage/'.$offer->image1)}}" style="width:100px;height:100px" alt="image1" class="img-thumbnail border border-dark">
<h6 class="text-dark" >{{ $offer->title}} </h6>
<h6>{!! substr($offer["description"], 0, 140) !!}</h6>
<a class="btn btn-dark center m-2 center" href="{{ url ('offers/post/'.$offer->id) }}">more details</a>
</div>
@endforeach
		
	</div>



	

</div>

@endsection
 