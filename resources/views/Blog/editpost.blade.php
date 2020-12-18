<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <meta name="_token" content="{{csrf_token()}}" >


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
  <div class="container" style="padding:10px; background: linear-gradient(to bottom right, #3D58F3, #9548F9);border-radius:10px">
    <!-- <a class="navbar-brand" href="index.html">
      <img src="../assets/favicon-light.png" alt="" width="40">
    </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('getuserpostcomment') }}">Back</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Log Out</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill">Download Now</button>
      </div>
    </div>
  </div>
</nav>

<main>      
  
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 py-3">
       
      
          <article class="blog-entry">
            <div class="entry-header">
              <div class="post-thumbnail">
                <img src="{{ asset('postimg') }}/{{ $Post->image }}" alt="">
              </div>
              <div class="post-date">
                <h3>20</h3>
                <span>Feb</span>
              </div>
            </div>
            <div class="post-title"><a href="blog-details.html">{{ $Post->title }}</a></div>
                        <div class="entry-content">
              <p>{{ $Post->body }}</p>
            </div>
          </article>
        
          <div class="entry-meta mb-2" style="text-align:center">
              
              <div class="meta-item">
                <div class="icon">
                  <span class="mai-chatbubble-ellipses"></span>
                </div>
               
                <span>{{$Post->comments->count()}} 
                    @if($Post->comments->count() > 1)
                     Comments
                    @else
                     Comment
                    @endif
                </span>
               
              </div>
              <div class="meta-item">
                <div class="icon">
                  <span class="mai-pricetags"></span>
                </div> 
               <span>Like</span>
              </div>
            </div>   

              <hr>
  
        </div>

        
        <!-- Sidebar -->
        <div class="col-lg-4 py-3">
          <div class="widget-wrap" style=" background: linear-gradient(to bottom right, #ffff, #fff9); color: black">
          <form  id="post" class="mt-5" enctype="multipart/form-data">
         @csrf
          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Title</label>
            <input type="text" class="form-control" name="title" id="email" value="{{ $Post->title }}" required="">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Body</label>
            <textarea rows="6" class="form-control" name="body" id="message" value="{{ $Post->body }}" required=""></textarea>
          </div>


          <label for="subject" style="border-radius: 30px; color:blue; outline:none">Select an Image Here</label>
            <fieldset>
              <input style="border-radius: 30px ;color:white; background-color:rgb(24,50,100)" name="file" type="file" class="form-control"  placeholder="..." required="">
            </fieldset>

          <div class="form-group mt-4 wow fadeInUp" style="text-align:center">
            <button type="submit" class="btn btn-primary rounded-pill">Upload</button>
          </div>
        </form>
          </div>

        </div> <!-- end sidebar -->
      </div>
    </div>
  </div>

</main>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

<script>
$("#post").submit(function(e){
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
    headers:{
       'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
     },
    url: "/updatepost/{{ $Post->id }}",
    type:"POST",
    contentType: false,
    processData: false,
    data:formData,
    success:function(response){
     
     if(response){
      alert('Data Updated')
      location.reload();
     } 
    },
    error: function(response, textStatus, errorThrown){
       console.log(response);
     },
  });
});
</script>


</body>
</html>
