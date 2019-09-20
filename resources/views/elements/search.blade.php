<div class="bg-image container text-center p-3 mt-3 border well" >
<form  class="form">
  <div class="form-row">
  <div class="col">
  <input type="text" class="form-control" id="inputPassword" placeholder="Search service">
  <!--  <option value="1" disabled selected>Choose your option</option> -->
</div>

    <div class="col">
    <!-- <label class="mdb-main-label">Example label</label> -->
    <select class="form-control colorful-select dropdown-primary" searchable="Search here..">
    <option  disabled selected>Choose category</option>
    @foreach($categories as $cat)
    <option value="{{ $cat['id'] }}" >{{ $cat['name_cat'] }}</option>
    @endforeach
</select>
    </div>
   
    <div class="col">
    <!-- <label class="mdb-main-label">Example label</label> -->
<select class="mdb-select form-control" searchable="Search here..">
  <option value="0" disabled selected>the city</option>
  @foreach($cities as $city)
    <option value="{{ $city['id'] }}" >{{ $city['name_city'] }}</option>
    @endforeach
</select>
    </div>
  </div>
</form>
</div>
<!-- styling  -->
<style>
.well {
   background-color: rgba(91,192,222,0.8);
}
</style>