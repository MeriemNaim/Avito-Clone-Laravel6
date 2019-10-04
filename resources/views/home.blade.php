@extends('layouts.app')
@section('content')
<div class="container-fluid bg-img">
@include('elements.search')
<div class="container text-center p-5  text-white" >
  <h1>WELCOME </h1>
  <p>to avito clone site project </p>
</div>
</div>

<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>



<style>
.bg-img {

  background-image: url(https://source.unsplash.com/XvS-uKUoUao);
  min-height:600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /* position: relative; */
</style>


@endsection



