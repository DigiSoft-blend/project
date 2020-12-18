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
  <link rel="stylesheet" href="../assets/css/mystyle.css">
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
      <div>
       <a class="nav-link" href="{{ route('auth') }}" style="color:white;text-decoration:none;">Back</a>
      </div>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill">Download Now</button>
      </div>
    </div>
  </div>
</nav>

<main>
<div  style="background-image: url(../coverimg/intro-bg.png); background-size: cover;background-repeat: no-repeat;background-position: center;">
    <div class="hero-caption">
      <div class="container fg-white">
        <div class="row justify-content-center">
          <div class="col-lg-6">
          <br><br><br>
  
       <div class="widget-wrap" style="color: blue">
        <form  class="search-form"  action="updateuser/{{ $user->id }}" method="POST" class="mt-5" enctype="multipart/form-data">
        <h3 class="widget-title">Edit Your Profile</h3>
          
           @if(Session::has('User_Updated'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('User_Updated') }}                   
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
            <input type="text" class="form-control" name="name" id="username" required=""  style="border-radius:40px">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" name="email" id="useremail" required=""  style="border-radius:40px">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Password</label>
            <input type="password" class="form-control" name="password" id="userpassword" required=""  style="border-radius:40px">
          </div>


          <label  for="subject" style="color:blue">Select an Image Here</label>
            <fieldset>
              <input  style="color:white; background-color:rgb(24,50,100); border-radius:40px" name="file" type="file" class="form-control"  placeholder="image" required="">
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

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>
