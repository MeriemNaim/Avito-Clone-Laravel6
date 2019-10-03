@extends('layouts.sidenav')
@section('content')
<div class="container" >
	<a class="btn btn-info center m-2 center" href="{{url('/offers/create')}}">Create a Post </a>
	<div class="row">
		@foreach($off as $offer)
		<!-- ******************************************* -->
				@if($offer->is_deleted=='1')
				<div class="border border-white text-white text-center col-3 p-3 m-2 bg-danger" >
				<h6 class="text-dark">this poster Deleted </h6>
				<img src="{{ asset('storage/'.$offer->image1)}}" style="width:100px;height:100px" alt="image1" class="img-thumbnail border border-dark">
				<h6 class="text-dark" >{{ $offer->title}} </h6>
				<h6>{!! substr($offer["description"], 0, 140) !!}</h6>
				<div class="col-2 col-md-12 text-center">
				<div class="btn-group btn-group-sm">
				<button type="button" class="btn btn-dark">
				<a href="{{ url ('admin/adoffer/deleteoffer/'.$offer->id) }}">UnDelete</a>
				</button>
				</div>
				</div>
				</div>
		
		<!-- ùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùù -->
		@elseif($offer->is_approved =='1')	
		<div class="border border-white text-white text-center col-3 p-3 m-2 bg-success" >
		<h6 class="text-dark">this offer is approved </h6>
		<img src="{{ asset('storage/'.$offer->image1)}}" style="width:100px;height:100px" alt="image1" class="img-thumbnail border border-dark">
		<h6 class="text-dark" >{{ $offer->title}} </h6>
		<h6>{!! substr($offer["description"], 0, 140) !!}</h6>
		<div class="col-2 col-md-12 text-center">
		<div class="btn-group btn-group-sm">
		<button type="button" class="btn btn-dark">
		<a href="{{ url ('admin/adoffer/apoffer/'.$offer->id) }}">UNpprover</a>
		</button>
		<button type="button" class="btn btn-danger">
		<a href="{{ url ('admin/adoffer/deleteoffer/'.$offer->id) }}">delete</a>
		</button>
		</div>
		</div>
		</div>
		@endif
<!-- ****************************************************** -->
			@if($offer->is_deleted=='0' and $offer->is_approved=='0')
			<div class="border border-white text-white text-center col-3 p-3 m-2 bg-info" > 
			<h6 class="text-danger">this offer need action </h6>
			<img src="{{ asset('storage/'.$offer->image1)}}" style="width:100px;height:100px" alt="image1" class="img-thumbnail border border-dark">
			<h6 class="text-dark" >{{ $offer->title}} </h6>
			<h6>{!! substr($offer["description"], 0, 140) !!}</h6>
			<div class="col-2 col-md-12 text-center">
			<div class="btn-group btn-group-sm">
			<button type="button" class="btn btn-dark">
			<a href="{{ url ('/admin/adoffer/apoffer/'.$offer->id) }}">Aproved</a>
			</button>
			<button type="button" class="btn btn-primary">
			<a href="{{url('/admin/adoffer/editoffer/'.$offer->id)}}">Update</a>
			</button>
			<button type="button" class="btn btn-danger">
			<a href="{{ url ('admin/adoffer/deleteoffer/'.$offer->id) }}">Delete</a>
			</button>
			</div>
			</div>
			</div>
			@endif

	
@endforeach	
	</div>

</div>
@endsection
