@extends('layouts.app')
@section('content')
<style>
.bg-img {

  background-image: url(https://source.unsplash.com/RYyr-k3Ysqg);
  min-height:600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

 }
 .blog .carousel-indicators {
  left: 0;
  top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius:50%;
    width: 8px;
    height: 8px;
}

.blog .carousel-indicators .active {
background: #707070;
}
</style>
<div class="container-fluid bg-img">
@include('elements.search')
<div class="container text-center p-5  text-dark" >

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
<!-- </div> -->

<section class="text-center py-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center mb-5 pt-4">Recent Offers</h2>
    <!--Section description-->
    <p class="text-center mb-5 pb-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur
      sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      @foreach ($offers as $offer)
          @if($offer->is_approved=='1') 

      <div class="col-lg-4 col-md-12 mb-4 mask waves-effect waves-light">
        <!--Featured image-->
        <div class="view overlay z-depth-2 mb-2">

          <img src="{{ asset('storage/'.$offer->image1)}}" alt="thumbnail" class="img-thumbnail text-center"
  style="width:200px;height:200px">
          <a >
            <div class="mask waves-effect waves-light rgba-white-slight"></div>
          </a>
        </div>

        <!--Excerpt-->
        <h4 class="mb-3 font-weight-bold dark-grey-text">
          <strong>{{ $offer->title}}</strong>
        </h4>
        <p class="grey-text">{!! substr($offer["description"], 0, 140) !!}</p>
        <a class="btn btn-pink btn-rounded btn-md waves-effect waves-light" href="{{ url ('offers/post/'.$offer->id) }}">Read more</a>
      </div>
      @endif
       @endforeach    
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </section>

  <!-- slider -->
<div class="container">
            <div class="row blog">
                <div class="col-md-12 col-lg-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                  @foreach($categories as $cat)
                                  @if($cat['id']>=1 and $cat['id']<=3)
                                    <div class="col-md-4">
                                      
                                        <a href="{{ url('filterby/bycat/'.$cat['id']) }}">
                                            <img src="{{ $cat['src'] }}" style="max-width:100%;">
                                        </a>
                                        <h6>{{$cat['name_cat']}}</h6>
                                    </div>
                                    @endif
                                    @endforeach
                                    
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                  @foreach($categories as $cat)
                                    @if($cat['id']>=4 and $cat['id']<=6)
                                    <div class="col-md-4">

                                        <a href="{{ url('filterby/bycat/'.$cat['id']) }}">
                                            <img src="{{ $cat['src'] }}" style="max-width:100%;">
                                        </a>
                                         <h6>{{$cat['name_cat']}}</h6>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
</div>
  <!-- end of slider -->




<script type="text/javascript">
 
    $('#blogCarousel').carousel({
        interval: 5000
    });
</script>









</div>
@endsection



