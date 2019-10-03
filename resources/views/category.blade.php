@extends('layouts.app')
@section('content')

<div class="container text-center ">
  <h1 class="  font-weight-light text-center  mt-4 mb-0">choose a category</h1>
  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
@foreach($categories as $cat)

    <div class="col-lg-4 col-md-4 col-6">
      <a href="{{ url('filterby/bycat/'.$cat['id']) }}" class="text-dark text-center d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ $cat['src'] }}" alt="">
            {{ $cat['name_cat'] }}</a>
    </div>
    @endforeach
 
  </div>
</div>

@endsection