@extends('layouts.sidenav')
@section('content')

<div class="container text-center  p-5 border border-black">
  <h1>WELCOME MASTER</h1>
  <h6 class="text-info">admin dashboard</h6>
  <a class="btn btn-info center m-2 center text-light" href="{{url('/admin/users')}}">see all users </a>
</div>
@endsection
