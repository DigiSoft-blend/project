@extends('Layout.main')
@section('content')

<section>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header tcolor">
                        <h5 class="modal-title" id="myModalTitle">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body myModal tcolor">
                                        <!--Modal content-->
                        <form action="{{ route('auth') }}" method="POST">     
                        {{ csrf_field() }}
                        {{ method_field('GET') }}
     
                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Email" required >
                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                            </div>
                          
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required >
                                <small id="emailHelp" class="form-text" style="color: rgb(228, 228, 224);">We'll never share your todo name with anyone else.</small>
                            </div>
                            <br>

            

                            <button type="submit" id="editbtn" class="btn btn-success btn-sm">Submit</button>
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="display:flex; float:right">Close</button>
                                       
                        </form>                                        
                                         
                                       
                    </div>
                    <div class="modal-footer">
                                        
                    </div>
                </div>
            </div>
        </div>
    </section>


<nav class="navbar navbar-expand-lg navbar-light navbar-floating">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">
      <img src="../assets/favicon.png" alt="" width="40">
    </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarToggler">
    
      <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
         <li> <button type="button" href="#" class="btn btn-primary rounded-pill"  data-toggle="modal" data-target="#myModal">Log in <span class="fa fa-sign-in" ></span></button></li>
        <!-- <li class="nav-item">
          <a style="color:white" class="nav-link" href="{{ route('admin') }}">Sign in</a>
        </li> -->
      
      </ul>
      <!-- <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-dark rounded-pill">Download Now</button>
      </div> -->
    </div>
  </div>
</nav>

@foreach( $CoverPage as $cover )
  
<div class="page-hero-section bg-image hero-home-1" style=" background-image: url({{ asset('coverpage') }}/{{ $cover->image }});">
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row align-items-center h-100">
         <div class="col-lg-6 wow fadeInUp"  style="background-color:white; padding:20px; border-radius:20px">
          <p>{{ $cover->title1 }}</p>
          <h1 class="mb-4">{{ $cover->title2 }}</h1>
          <p class="mb-4">{{ $cover->paragraph }}</p>
          <a href="#email" class="btn btn-primary rounded-pill">Contact me now</a>
        </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
           <!-- <div class="img-place mobile-preview shadow floating-animate">
            <img src="{{ asset('mixpix') }}/{{ $cover->pix }}" alt="">
          </div>  -->
          @if(Session::has('access_denied'))
              <div class="alert-box">
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('access_denied') }}
                </div>
              </div> 
           @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- Clients -->
<!-- <div class="page-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
         <div class="img-place client-img">
          <img src="../assets/img/clients/alter_sport.png" alt="">
        </div> 
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
         <div class="img-place client-img">
          <img src="../assets/img/clients/cleaning_service.png" alt="">
        </div> 
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
         <div class="img-place client-img">
          <img src="../assets/img/clients/creative_photo.png" alt="">
        </div> 
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
         <div class="img-place client-img">
          <img src="../assets/img/clients/global_tv.png" alt="">
        </div> 
      </div>
    </div>
  </div>
</div> End clients -->


<hr>

<div class="page-section">
  <div class="container">
  @foreach( $Collections as $collection)
    <div class="row">
    <!-- mobile-preview -->
  
    <div class="col-lg-5 py-3">
        <div class="img-place  shadow wow zoomIn">
          <img src="{{ asset('collections') }}/{{ $collection->image }}" alt="" style="border-radius:10px" >
        </div>
      </div>


      <div class="col-lg-6 offset-lg-1 py-3 mt-lg-5 wow fadeInUp">
      <h1 style="color:red">Collection {{ $collection->id }}</h1>
        <h1 class="mb-4">{{ $collection->title }}</h1>
        <p class="mb-4">{{ $collection->body }}</p>
        <a href="#email" class="btn btn-outline-primary rounded-pill">Send an Email</a>
        
      </div>
      
      
    </div>
    <hr>
    @endforeach 
  </div>
</div>

</div>


<div class="page-section bg-dark fg-white">
  <div class="container">
    <h1 class="text-center">Why Choose Me</h1>

    <div class="row justify-content-center mt-5">
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn">
          <div class="mb-3">
            <img src="../assets/img/icons/rocket.svg" alt="">
          </div>
          <p class="fs-large">Very Fast</p>
          <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="200ms">
          <div class="mb-3">
            <img src="../assets/img/icons/testimony.svg" alt="">
          </div>
          <p class="fs-large">Happy Client</p>
          <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="600ms">
          <div class="mb-3">
            <img src="../assets/img/icons/coins.svg" alt="">
          </div>
          <p class="fs-large">Save Money</p>
          <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="800ms">
          <div class="mb-3">
            <img src="../assets/img/icons/support.svg" alt="">
          </div>
          <p class="fs-large">24/7 Support</p>
          <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
        </div>
      </div>
      
    </div>
  </div>
</div>

<!-- <div class="page-section bg-image" style="background-image: url(../assets/img/pattern_2.svg);">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5 mb-5 mb-lg-0 wow fadeInUp">
        <h1 class="mb-4">Pricing Plan</h1>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores inventore maxime ipsa eligendi quibusdam velit maiores adipisci odit, exercitationem cumque iusto at debitis reiciendis a, ipsum aliquam reprehenderit. Sed, delectus.</p>
        <a href="#" class="btn btn-gradient btn-split-icon rounded-pill">
          <span class="icon mai-call-outline"></span> Custom Plan
        </a>
      </div>
      <div class="col-lg-7">
        <div class="pricing-table">
          <div class="pricing-item active wow zoomIn">
            <div class="pricing-header">
              <h5>Business Plan</h5>
              <h1 class="fw-normal">$49.00</h1>
            </div>
            <div class="pricing-body">
              <ul class="theme-list">
                <li class="list-item">Push Notification</li>
                <li class="list-item">Unlimited Bandwith</li>
                <li class="list-item">Realtime Database</li>
                <li class="list-item">Monthly Backup</li>
                <li class="list-item">24/7 Support</li>
              </ul>
            </div>
            <button class="btn btn-dark">Choose Plan</button>
          </div>
          <div class="pricing-item wow zoomIn" data-wow-delay="200ms">
            <div class="pricing-header">
              <h5>Starter Plan</h5>
              <h1 class="fw-normal">$24.00</h1>
            </div>
            <div class="pricing-body">
              <ul class="theme-list">
                <li class="list-item">Push Notification</li>
                <li class="list-item">Unlimited Bandwith</li>
                <li class="list-item">Realtime Database</li>
                <li class="list-item">Monthly Backup</li>
                <li class="list-item">24/7 Support</li>
              </ul>
            </div>
            <button class="btn btn-dark">Choose Plan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

@foreach($CostomerService as $cs)
<div class="page-section bg-image bg-image-overlay-dark" style="background-image: url({{ asset('costomerservice') }}/{{ $cs->image }});">
  <div class="container fg-white">
    <div class="row">
      <div class="col-md-8 col-lg-6 offset-lg-1 wow fadeInUp">
        <h2 class="mb-5 fg-white fw-normal">{{ $cs->title }}</h2>
        <p class="fs-large font-italic">{{ $cs->body }}</p>
        <p class="fs-large fg-grey fw-medium mb-5">Silas Udofia,  BackEnd Engineer</p>

        <a href="#" class="btn btn-outline-light rounded-pill">Read Stories <span class="mai-chevron-forward"></span></a>
      </div>
    </div>
  </div>
</div>
@endforeach 

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 py-3 mb-5 mb-lg-0">
        <div class="img-place w-lg-75 wow zoomIn">
          <img src="../assets/img/illustration_contact.svg" alt="">
        </div>
      </div>


      <div class="col-lg-5 py-3" id="email">

      @if(Session::has('Email_Sent'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('Email_Sent') }}
      </div>
      @endif

      @if(Session::has('Error'))
      <div class="alert alert-danger" role="alert">
        {{ Session::get('Error') }}
      </div>
      @endif

        <h1 class="wow fadeInUp">Need help? <br>
        Don't worry just contact Me</h1>
 
        <form action="{{ route('send-mail') }}" method="POST" class="mt-5" >
        {{ csrf_field() }}
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Fullname</label>
            <input type="text" class="form-control" name="name" id="name" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" name="email" id="emails" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Message</label>
            <textarea rows="6" class="form-control" name="message" id="message" required=""></textarea>
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="page-footer-section bg-dark fg-white">
  <div class="container">
    <div class="row mb-5 py-3">
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Pages</h5>
        <ul class="menu-link">
          <li><a href="#" class="">Features</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Company</h5>
        <ul class="menu-link">
          <li><a href="#" class="">About</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Contact</h5>
        <ul class="menu-link">
          <li><a href="#" class="">08160595927</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Subscribe</h5>
        <p>Get some offers, news, or update features of application</p>
        <form method="POST">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Your email..">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary"><span class="mai-send"></span></button>
            </div>
          </div>
        </form>

        <!-- Social Media Button -->
        <div class="mt-4">
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-twitter"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-instagram"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-google"></span></a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="container">
    <div class="row">
      
      
    </div>
  </div>
</div>

@endsection