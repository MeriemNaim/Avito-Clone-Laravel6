<div class=" container text-center p-3 mt-3 border bg-info" >

<form  class="form" action="/search" method="GET" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-row">
    <!-- searchbar -->
  <div class="col">
  <input  name="title" type="text" class="form-control" id="inputSearchBar" placeholder="Search Offers">
</div>
<!-- end of search  -->
<!-- category -->
    <div class="col">
    <!-- <label class="mdb-main-label">Example label</label> -->
      <select name="category" class="form-control colorful-select dropdown-primary" searchable="Search here..">
      <option  disabled selected>Choose category</option>
      @foreach($categories as $cat)
      <option value="{{ $cat['id'] }}" >{{ $cat['name_cat'] }}</option>
      @endforeach
      </select>
    </div>
   <!-- end of category -->
<div class="col">
  <select name="city" class="mdb-select form-control" searchable="Search here..">
  <option value="0" disabled selected>the city</option>
  @foreach($cities as $city)
  <option value="{{ $city['id'] }}" >{{ $city['name_city'] }}</option>
  @endforeach
  </select>
</div>
<!-- end of city -->
<div class="col">
    <button type="submit" class="btn btn-primary">Submit</button>

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