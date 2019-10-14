@extends('layouts.sidenav')
@section('content')
<div class="container">

  <div class="table-responsive ">
  <table class=" table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">city_name</th>
         <th scope="col">role</th>
         <th scope="col">role</th>
      </tr>
    </thead>
@foreach($categories as $cat)
<tbody class=" text-dark">
    <tr>
    <th scope="row">{{ $cat['id'] }}</th>
    <td>{{ $cat['name_cat']}}</td>
    <td><a href="{{ url ('admin/aduser/deleteuser/'.$cat['id'])}}" class="btn btn-danger">delete</a></td>
    
    <td><a href="{{ url ('admin/aduser/deleteuser/'.$cat['id'])}}" class="btn btn-info">change</a></td>
    </tr>
</tbody>
@endforeach
</table>
</div>
  
</div>
@endsection
