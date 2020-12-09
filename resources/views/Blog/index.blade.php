<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Silas Udofias Enterprise</title>

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
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
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
  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../coverimg/banner2.png);">
  <br><br>
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Welcome to <span class="webchat" >WebChat</span></h3>
            <p> <a class="btn btn-primary rounded-pill" href="{{ route('Signin') }}">Sign in as participant</a></p>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 py-3">


        @foreach( $user as $user)
         @foreach($user->post as $Post)
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
            <div class="entry-meta mb-2">
              <div class="meta-item entry-author">
                <div class="icon">
                  <span class="mai-person"></span>  
                </div>
                by <a href="#">{{ $user->name }}</a>
              </div>
            
              <div class="meta-item">
                <div class="icon">
                  <span class="mai-pricetags"></span>
                </div>
                Category: 
                <a href="#">Business</a>, 
                <a href="#">Finances</a>
              </div>
              <div class="meta-item">
                <div class="icon">
                 <a href="{{ route('Signin') }}" style="color:white; text-decoration:none"><span class="mai-chatbubble-ellipses"></span></a> 
                
                </div>
                <span>{{$Post->comments()->count()}} 
                    @if($Post->comments()->count() > 1)
                     Comments
                    @else
                     Comment
                    @endif
               </span>
              </div>
            </div>
            <a href="/continue-reading/{{ $Post->id }}" class="btn btn-primary">Continue Reading</a>
          </article>
         @endforeach
         @endforeach
         
        

          






        </div>
        <!-- Sidebar -->
        <div class="col-lg-4 py-3">
          <div class="widget-wrap">
            <form action="#" class="search-form">
              <h3 class="widget-title">Search</h3>
              <div class="form-group">
                <span class="icon mai-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>

            <div class="widget-wrap">
              <h3 class="widget-title">Jobs</h3>
              <ul class="categories">
                <li><a href="#">Graphic Designer <span>12</span></a></li>
                <li><a href="#">Visual Assistant <span>22</span></a></li>
                <li><a href="#">Programing <span>37</span></a></li>
                <li><a href="#">Office Admin <span>42</span></a></li>
                <li><a href="#">Web Designer <span>14</span></a></li>
                <li><a href="#">Language <span>140</span></a></li>
              </ul>
            </div>

            <div class="widget-wrap">
              <h3 class="widget-title">Recent Blog</h3>
              <div class="blog-widget">
                <div class="blog-img">
                  <img src="../assets/img/blogs/blog_1.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="blog-title mb-2"><a href="#">Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium</a></div>
                  <div class="meta">
                    <a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="icon-person"></span> Admin</a>
                    <a href="#"><span class="icon-chat"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-widget">
                <div class="blog-img">
                  <img src="../assets/img/blogs/blog_2.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="blog-title mb-2"><a href="#">Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium</a></div>
                  <div class="meta">
                    <a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="icon-person"></span> Admin</a>
                    <a href="#"><span class="icon-chat"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-widget">
                <div class="blog-img">
                  <img src="../assets/img/blogs/blog_3.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="blog-title mb-2"><a href="#">Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium</a></div>
                  <div class="meta">
                    <a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="icon-person"></span> Admin</a>
                    <a href="#"><span class="icon-chat"></span> 19</a>
                  </div>
                </div>
              </div>
            </div>

          <div class="widget-wrap">
            <h3 class="widget-title">Tag Cloud</h3>
            <div class="tag-clouds">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
          </div>

          <div class="widget-wrap">
            <h3 class="widget-title">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div> <!-- end sidebar -->
      </div>
    </div>
  </div>

</main>


<footer class="page-footer-section bg-dark fg-white">
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
        <ul class="menu-link">
          <li><a href="#" class="">About</a></li>
          <li><a href="#" class="">Team</a></li>
          <li><a href="#" class="">Leadership</a></li>
          <li><a href="#" class="">Careers</a></li>
          <li><a href="#" class="">HIRING!</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Contact</h5>
        <ul class="menu-link">
          <li><a href="#" class="">Contact Us</a></li>
          <li><a href="#" class="">Office Location</a></li>
          <li><a href="#" class="">hello@mobster.com</a></li>
          <li><a href="#" class="">support@macodeid.com</a></li>
          <li><a href="#" class="">+808 11233 900</a></li>
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
        <img src="../assets/favicon-light.png" alt="" width="40">
        <!-- Please don't remove or modify the credits below -->
        <p class="d-inline-block ml-2">Copyright &copy; <a href="https://www.macodeid.com/" class="fg-white fw-medium">MACode ID</a>. All rights reserved</p>
      </div>
      <div class="col-12 col-md-6 py-2">
        <ul class="nav justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer> <!-- .page-footer -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>
