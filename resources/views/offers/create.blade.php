@extends('layouts.app')
@section('content')
<h1 class="text-center">Create New Devices</h1>
 
<div class="container p-5 border m">
 
    <form method="POST" action="/offersaction" enctype="multipart/form-data">
 
        {{ csrf_field() }}
 
       <div>
          <label >Offer title</label>
          <input type="text" name="title" placeholder="Offer Title">
 
      </div>

      <div>
            <label >Offre Description</label>
            <textarea name="description" placeholder="Offer Description"></textarea>
 
      </div>
<!-- *******************************category************* -->
<div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputState">Category</label>
<select class="form-control colorful-select dropdown-primary" name="cat" searchable="Search here.." >
    <option  disabled selected>Choose category</option>
    @foreach($categories as $cat)
    <option value="{{ $cat['id'] }}" >{{ $cat['name_cat'] }}</option>
    @endforeach
</select>
    </div>
    <!-- **************city********************** -->
     <div class="form-group col-md-6">
      <label for="inputCity">City</label>
<select class="mdb-select form-control" name="city" searchable="Search here..">
<option value="0" disabled selected>the city</option>
@foreach($cities as $city)
<option value="{{ $city['id'] }}" >{{ $city['name_city'] }}</option>
@endforeach
</select>
    </div>
<!-- *******************city************** -->
</div>
      <div>
 
              <h6>choose at least 4 images</h6>
  <div class="file-field">
    <div class="btn btn-outline-success btn-rounded waves-effect btn-sm ">
      <span>Choose img 1</span>
      <input type="file" name="image1" >
    </div>
    <!-- image2 -->
    <div class="btn btn-outline-success btn-rounded waves-effect btn-sm ">
      <span>Choose img 2</span>
      <input type="file" name="image2" >
    </div>
    <!-- image3 -->
    <div class="btn btn-outline-success btn-rounded waves-effect btn-sm ">
      <span>Choose img 3</span>
      <input type="file" name="image3" >
    </div>
    <!-- image4 -->
    <div class="btn btn-outline-success btn-rounded waves-effect btn-sm ">
      <span>Choose img 4</span>
      <input type="file" name="image4" >
    </div>
  </div>
      </div>
      <!-- submit -->
      <div>
 
            <input type="submit" value="Post The Offer">
 
      </div>
 
    </form>  
 
 </div>   




<!-- styling -->

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
@endsection
