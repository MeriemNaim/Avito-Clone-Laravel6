@extends('layouts.sidenav')
@section('content')

<div class="container">
    <!-- confirm delete -->
    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 -->
    <!-- Modal content-->
    <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 -->
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">age</th>
        <th scope="col">role</th>
        <th scope="col">status</th>
        <th scope="col">delete</th>
        <th scope="col">status</th>
        <!-- <th scope="col">updates</th> --> 
      </tr>
    </thead>
@foreach ($us as $user)
<!-- condition deleted  -->
@if($user->isdeleted==1)
<tbody class="bg-danger text-light">
    <tr>
    <th scope="row">{{ $user->id }}</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>{{ $user->age }}</td>
    <!-- condition admin-->
    @if($user->isadmin=='1')
    <td>ADMIN</td>
    @else
    <td>MEMEBER</td>
    @endif
    <!-- endconfition -->
    @if($user->isdeleted==1)
    <td>deleted</td>
    @else
    <td>not deleted</td>
    @endif
    <td><a href="{{ url ('admin/aduser/deleteuser/'.$user->id)}}" class="btn btn-outline-light">delete</a></td>
    <!-- staus/admin or memeber -->
    <td><a href="{{ url ('admin/aduser/deleteuser/'.$user->id)}}" class="btn btn-info">change</a></td>
    </tr>
</tbody>

<!-- condition not deleted -->

    @else
    <tbody class="bg-success text-light">
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->age }}</td>
        <!-- condition admin-->
    @if($user->isadmin=='1')
    <td>ADMIN</td>
    @else
    <td>MEMEBER</td>
    @endif
    <!-- endconfition -->
    @if($user->isdeleted==1)
    <td>deleted</td>
    @else
    <td>not deleted</td>
    @endif
    <td><a href="{{ url ('admin/aduser/deleteuser/'.$user->id)}}" class="btn btn-danger btn">delete</a></td>
     <!-- staus/admin or memeber -->
    <td><a href="{{ url ('admin/aduser/deleteuser/'.$user->id)}}" class="btn btn-info">change</a></td>
  
    </tr>
    </tbody>
@endif



@endforeach





  </table>
</div>
  
</div>

@endsection
