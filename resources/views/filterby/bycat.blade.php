@extends('layouts.app')
@section('content')
<div class="container text-center ">
  <h1 class="  font-weight-light text-center  mt-4 mb-0">
    this is <span class="text-danger">{{$categories['name_cat'] }}</span> </h1>
    <h1 class="  font-weight-light text-center  mt-4 mb-0">
    this is the title <span class="text-dark">{{$off->title}}</span> </h1>
  <hr class="mt-2 mb-5">
</div>
@endsection