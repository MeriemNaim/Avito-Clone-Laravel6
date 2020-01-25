@extends('layouts.sidenav')
@section('content')
<div class="container">
  <form method="POST" action="/createcat" enctype="multipart/form-data">
 
        {{ csrf_field() }}
 
       <div>
          <label >category name</label></br>
          <input type="text" name="category" placeholder="name of category"> 
      </div>
      <div>
          <label >image </label></br>
          <input type="text" name="source" placeholder="images">
      </div>
      <div>
            <input type="submit" value="Post The Offer">
      </div>
 
    </form>  
  
</div>
@endsection
