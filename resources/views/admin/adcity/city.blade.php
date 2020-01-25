@extends('layouts.sidenav')
@section('content')
<div class="container">
<button class="btn btn-info text-light">Add new city</button>

  <div class="table-responsive ">
  <table class=" table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">city_name</th>
         <!-- <th scope="col">role</th>
         <th scope="col">role</th> -->
      </tr>
    </thead>
@foreach($cities as $city)
<tbody class=" text-dark">
    <tr>
    <th scope="row">{{ $city['id'] }}</th>
    <td>{{ $city['name_city']}}</td>
    <td><a href="{{ url ('admin/aduser/deleteuser/'.$city['id'])}}" class="btn btn-danger">delete</a></td>
    </tr>
</tbody>
@endforeach
</table>
</div>
  
</div>
@endsection
