@extends('layouts.app')
@section('content')

<style type="text/css">
	.bg {
  /* The image used */
  background-image: url("https://source.unsplash.com/_VZ2MBS7OvU");
  /* Full height */
  height: 100%;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bgc{
	background-color: rgba(255, 255, 255,0.4);
}

	.main-section{
	background-color: rgba(255, 255, 255,0.4);

	}
	.fileinput-remove,

	.fileinput-upload{

	display: none;

}
</style>
<!-- style -->

 <div class=" text-white container bg mt-4 mb-4 justify-content-center ">
 	<form class="p-5">
 		
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input  type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Titles</label>
    <input type="text" class="form-control" id="inputTitle" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="inputAddress">Decription</label>
    <input type="text" class="form-control" id="inputDecription" placeholder="Description">
  </div>
  <div class="form-row">
  	<div class="form-group col-md-10">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Casablanca">
  </div>
  	<div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
    	<label for="inputCity">City</label>
<select class="mdb-select form-control" searchable="Search here..">
<option value="0" disabled selected>the city</option>
@foreach($cities as $city)
<option value="{{ $city['id'] }}" >{{ $city['name_city'] }}</option>
@endforeach
</select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Category</label>
<select class="form-control colorful-select dropdown-primary" searchable="Search here..">
    <option  disabled selected>Choose category</option>
    @foreach($categories as $cat)
    <option value="{{ $cat['id'] }}" >{{ $cat['name_cat'] }}</option>
    @endforeach
</select>
    </div>
    
  </div>
  <!-- form check -->
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

  <div class="container">

        <div class="row">

            <div class="col-lg-8 col-sm-12 col-11 main-section">

                <h6 class="text-left">ADD IMAGE</h6><br>

                    <div class="form-group">

                        <div class="file-loading">

                            <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">

                        </div>

                    </div>

            </div>

        </div>

    </div>
<!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        $("#file-1").fileinput({

            theme: 'fa',

            uploadUrl: "/imageUpload.php",

            allowedFileExtensions: ['jpeg','jpg', 'png', 'gif'],

            overwriteInitial: false,

            maxFileSize:2000,

            maxFilesNum: 10,

            slugCallback: function (filename) {

                return filename.replace('(', '_').replace(']', '_');

            }

        });

    </script>

<!-- submit btn -->
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
 </div>














@endsection