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
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth') }}">Back</a>
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
  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <!-- <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Comments</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div> -->
  <br>
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 py-3">
        
        
                <div class="row">
                  <!-- <span class="mai-person"></span>   -->
                  <div class="col-md-2" ><img class="profilepic1" src="{{ asset('postimg') }}/{{ $user->profileimage }}" alt=""></div>
                  <div class="col-md-9" style="color:white;padding-left:15px;padding-top:15px;font-size:30px"><span>{{ $user->name }}</span></div> 
                </div>
            
              
      
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
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </article>
        
         



        <div class="col-md-12 mycombox wow fadeInLeft">
          <div class="accordion accordion-gap" id="accordionFAQ">
          <div class="accordion-item wow fadeInRight">
            <div class="accordion-trigger" id="headingFour">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
              
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
          </button>
        </div>
       

            <div id="collapse1" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
              <div class="accordion-content">
                <p>Comments</p><hr>
                
                <div class="col-md-12 comboxinternal">
                 
                 @foreach($Post->comments as $com)
                   
                  <div class="col-md-12 entry-content">  
                    <div class="row">
                      <div class="col-md-1" style="padding:16px"><img class="profilepic" src="{{ asset('postimg') }}/{{ $com->user_profileimage }}" alt=""></div>
                      <div class="col-md-11">
                      <div class="container mycomment" >
                        <div class="post-id">{{ $com->user_name }}</div>
                        <div>{{ $com->comment }}</div>
                      </div>
                      </div>
                    </div>
                  </div>
                
              <div class="entry-meta mb-2" style="padding-left:85px">
              <div class="meta-item">
                <div class="icon">
                 <a href="" style="color:white; text-decoration:none"><span class="mai-chatbubble-ellipses"></span></a> 
                </div>
                <a href="#">Reply</a>
              </div>

              <div class="meta-item">
                <div class="icon">
                  <span class="fa fa-smile"></span>
                </div>
                <a href="#">Like</a>
              </div>
            </div>
        @endforeach
         </div>   

      <form action="{{url('addcomment/'.$Post->id)}}" method="POST" class="mt-5">
          @if(Session::has('Comment_Added'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('Comment_Added') }}
            </div>
           @endif
        {{ csrf_field() }}
          <div class="combox-footer">
          <div class="form-group">
            <input type="text" class="form-control rounded-pill" name="message" id="message" placeholder="What do you think ?" required="">
          </div>

          <div class="form-group mt-4">
            <button type="submit" class="btn btn-block rounded-pill">Upload</button>
          </div>
          </div>
        </form>
 

              </div>
            </div>
          </div>
        </div>
     </div>
          
    




 
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



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>
