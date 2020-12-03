@extends('Layout.main')
@section('content')

 <!-- <div class="container" style="text-align:center">
  <br>
  <div class="row">
  <div class="col-md-2">
  <p><a class="AboutMe-btn" href="{{ route('home') }}" role="button">Log Out<span class='fa fa-thumbs-o-up'></span></a></p>
  </div>
  <div class="col-md-10">
  <h1 style="color:red">Costomise Your Website</h1>
  </div>
  </div>
  <br>
  <hr>
 </div> -->

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
        
        <li class="nav-item">
          <a style="background-color:white" class="nav-link" href="{{ route('logout') }}">Sign Out</a>
        </li>

        <li class="nav-item">
          <a style="background-color:white" class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
      <!-- <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-dark rounded-pill">Download Now</button>
      </div> -->
    </div>
  </div>
</nav>

@foreach( $CoverPage as $cover )
  
<div class="page-hero-section bg-image hero-home-1 cover" style="background-image:  url({{ asset('coverpage') }}/{{ $cover->image }});" >
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp" style="background-color:white; padding:20px; border-radius:20px">
          <div class="badge mb-2"><span class="icon mr-1"><span class="mai-globe"></span></span>{{ $cover->title1 }}</div>
          <h1 class="mb-4">{{ $cover->title2 }}</h1>
          <p class="mb-4">{{ $cover->paragraph }}</p>
          <a href="#" class="btn btn-primary rounded-pill">About Me</a>
          <a href="{{url('deletcoverpageimg/'.$cover->id)}}" class="btn btn-danger rounded-pill"  style="display:flex; float:right;">Delete</a>
         
        </div>

        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <!-- <div class="img-place mobile-preview shadow floating-animate">
            <img src="{{ asset('mixpix') }}/{{ $cover->pix }}" alt="">
          </div>  -->

          @if(Session::has('CoverPageInfo_Deleted'))
          <div class="alert-box">
            <div class="alert alert-success" role="alert">
                {{ Session::get('CoverPageInfo_Deleted') }}
            </div>
          </div>
          @endif
         
          @if(Session::has('user_access_granted'))
           <div class="alert-box">
            <div class="alert alert-success" role="alert">
                {{ Session::get('user_access_granted') }}
            </div>
           </div>
          @endif
        </div>

        <!-- <div class="col-lg-6 py-2">
        <h4 class="wow fadeInUp">Cover Page Settings<br></h4>

        <form method="POST" class="mt-5">
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Fullname</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Message</label>
            <textarea rows="6" class="form-control" id="message"></textarea>
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div> -->


         <!-- <div class="col-lg-6 d-none d-lg-block wow zoomIn"> -->
         <!-- <div class="img-place mobile-preview shadow floating-animate">
            <img src="../assets/img/app_preview_1.png" alt="">
          </div> -->
     <!-- <div class="col-sm-6 py-2">
          
           <h4 class="wow fadeInUp">Cover Page Settings<br></h4>

        <form method="POST" class="mt-5">
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Fullname</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Message</label>
            <textarea rows="6" class="form-control" id="message"></textarea>
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
        </div>  -->

      </div>
    </div>
  </div>
</div>

@endforeach

       <div class="col-lg-12 py-2">
         <div class="container">
         <br><br>
           <h4 class="wow fadeInUp">Cover Page Settings<br></h4>

           @if(Session::has('Record_Added'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('Record_Added') }}
            </div>
           @endif

        <form action="{{ route('updatecoverpage') }}" method="POST" enctype="multipart/form-data" class="mt-5">
        {{ csrf_field() }}
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Title 1</label>
            <input type="text" class="form-control" name="title1" id="name" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Title 2</label>
            <input type="text" class="form-control" name="title2" id="email" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Paragraph</label>
            <textarea rows="6" class="form-control" name="paragraph" id="message"></textarea>
          </div>

         
            <label for="subject" style="color:blue">Select an Image Here</label>
            <fieldset>
            <label for="message" class="fw-medium fg-grey">Cover Image</label>
              <input  style="color:white; background-color:rgb(24,50,100)" name="file1" type="file" class="form-control"  placeholder="..." required="">
            </fieldset>

            <fieldset>
            <label for="message" class="fw-medium fg-grey">Mix pix</label>
              <input  style="color:white; background-color:rgb(24,50,100)" name="file2" type="file" class="form-control"  placeholder="..." required="">
            </fieldset>
          

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>

        </form>
        </div> 
        <br>
        <hr>
     </div> 


<!-- <div class="position-realive bg-image" style="background-image: url(../assets/img/pattern_1.svg); margin-top:70px">
<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 py-3">
        <div class="img-place mobile-preview shadow wow zoomIn">
          <img src="../assets/img/app_preview_2.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 py-3 mt-lg-5">
        <div class="iconic-list">
        <h1>Features</h1>
          <div class="iconic-item wow fadeInUp">
        
            <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
              <span class="mai-cube"></span>
            </div>
            <div class="iconic-content">
              <h5>Powerful Features</h5>
              <p class="fs-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          <div class="iconic-item wow fadeInUp">
            <div class="iconic-md iconic-text bg-info fg-white rounded-circle">
              <span class="mai-shield"></span>
            </div>
            <div class="iconic-content">
              <h5>Fully Secured</h5>
              <p class="fs-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          <div class="iconic-item wow fadeInUp">
            <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
              <span class="mai-desktop-outline"></span>
            </div>
            <div class="iconic-content">
              <h5>Easy Monitoring</h5>
              <p class="fs-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- <div class="col-md-12">

  <div class="container">
  <h1>Featured Settings</h1>
      <form method="POST" class="mt-5">
          

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Title</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Body</label>
            <textarea rows="6" class="form-control" id="message"></textarea>
          </div>
          
          <div class="form-group wow fadeInUp">
          <label for="subject" style="color:blue">Select an Image Here</label>
            <fieldset>
              <input  style="color:white; background-color:rgb(24,50,100)" name="file" type="file" class="form-control"  placeholder="..." required="">
            </fieldset>
            </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
    </div>
</div> -->



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
        <a href="#" class="btn btn-outline-primary rounded-pill">Send an Email</a>
        <a href="{{url('deletcollection/'.$collection->id)}}" class="btn btn-danger rounded-pill"  style="display:flex; float:right;">Delete</a>
      </div>
      
      
    </div>
    <hr>
    @endforeach 
  </div>
</div>


<div class="col-md-12">
  <div class="container">
  <h1>Collections Settings</h1>

      <form action="{{ route('updatecollections') }}" method="POST" class="mt-5" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Title</label>
            <input type="text" class="form-control" name="title" id="email" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Body</label>
            <textarea rows="6" class="form-control" name="body" id="message" required=""></textarea>
          </div>


          <label for="subject" style="color:blue">Select an Image Here</label>
            <fieldset>
              <input  style="color:white; background-color:rgb(24,50,100)" name="file" type="file" class="form-control"  placeholder="..." required="">
            </fieldset>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
    </div>
</div>
<br>


</div>


<div class="page-section bg-dark fg-white">
  <div class="container">
    <h1 class="text-center">Why Choose Our Furnitures</h1>

    <div class="row justify-content-center mt-5">
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn">
          <div class="mb-3">
            <img src="../assets/img/icons/rocket.svg" alt="">
          </div>
          <p class="fs-large">Fast Delivery</p>
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
      <!-- <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="400ms">
          <div class="mb-3">
            <img src="../assets/img/icons/promotion.svg" alt="">
          </div>
          <p class="fs-large">Free Ads</p>
          <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
        </div>
      </div> -->
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="600ms">
          <div class="mb-3">
            <img src="../assets/img/icons/coins.svg" alt="">
          </div>
          <p class="fs-large">Affordable</p>
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
      <!-- <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="1000ms">
          <div class="mb-3">
            <img src="../assets/img/icons/laptop.svg" alt="">
          </div>
          <p class="fs-large">Full Features</p>
          <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
        </div>
      </div> -->
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
        <a href="{{url('deletcostomerservice/'.$cs->id)}}" class="btn btn-danger rounded-pill"  style="display:flex; float:right;">Delete</a>
      </div>  
    </div>
  </div>
  @endforeach 

  <div class="col-md-12">
  <div class="container" style="color:blue">
  <br><br><hr>
  <h1 style="color:blue">Costomer Service Settings</h1>

      <form action="{{ route('updatecostomerservices') }}" method="POST" class="mt-5" enctype="multipart/form-data">
       {{ csrf_field() }}
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Title</label>
            <input type="text" class="form-control" name="title" id="name" required="">
          </div>


          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Body</label>
            <textarea rows="6" class="form-control" name="body" id="message" required=""></textarea>
          </div>

          <label for="subject" style="color:blue">Select an Image Here</label>
            <fieldset>
              <input  style="color:white; background-color:rgb(24,50,100)" name="file" type="file" class="form-control"  placeholder="..." required="">
            </fieldset>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
    </div>
</div>
<br>

</div>

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 py-3 mb-5 mb-lg-0">
        <div class="img-place w-lg-75 wow zoomIn">
          <img src="../assets/img/illustration_contact.svg" alt="">
        </div>
      </div>
      <div class="col-lg-5 py-3">
        <h1 class="wow fadeInUp">Need help? <br>
        Don't worry just contact us</h1>

        <form method="POST" class="mt-5">
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Fullname</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Message</label>
            <textarea rows="6" class="form-control" id="message"></textarea>
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
          <li><a href="#" class="">Customers</a></li>
          <li><a href="#" class="">Pricing</a></li>
          <li><a href="#" class="">GDPR</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Company</h5>
        <p>EtoroTech</p>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Contact</h5>
        <ul class="menu-link">
          <li>08160595927</li>
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
      <div class="col-12 col-md-6 py-2">
        
      </div>
      
    </div>
  </div>
</div>
@endsection