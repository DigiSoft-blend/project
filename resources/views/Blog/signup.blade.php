<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Mobster - One page app template</title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <!-- <a class="navbar-brand" href="index.html">
      <img src="../assets/favicon-light.png" alt="" width="40">
    </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.html">Homepage 1</a>
            <a class="dropdown-item" href="index-2.html">Homepage 2</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="updates.html">What's New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill">Download Now</button>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center">
          <div class="col-lg-6">
          <br><br><br><br>

       <div class="widget-wrap" style="color: blue">
        <form  class="search-form"  action="{{ route('adduser') }}" method="POST" class="mt-5" enctype="multipart/form-data">
        <h3 class="widget-title">Sign Up Now</h3>
          
           @if(Session::has('User_Added'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('User_Added') }}                   
            </div>
           @endif
           @if(Session::has('User_Exist'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('User_Exist') }}                   
            </div>
           @endif
      
        {{ csrf_field() }}
          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Name</label>
            <input type="text" class="form-control" name="name" id="username" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" name="email" id="useremail" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Password</label>
            <input type="password" class="form-control" name="password" id="userpassword" required="">
          </div>


          <label  for="subject" style="color:blue">Select an Image Here</label>
            <fieldset>
              <input  style="color:white; background-color:rgb(24,50,100)" name="file" type="file" class="form-control"  placeholder="..." required="">
            </fieldset>

        
          <div class="form-group mt-4 wow fadeInUp" style="text-align:center">
            <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
            <span><a class="btn btn-primary rounded-pill" href="{{ route('Signin') }}">Sign in</a></span>
          </div>
          
        </form>

          </div>

              
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 py-3">

       

          

  
    

        </div>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>
