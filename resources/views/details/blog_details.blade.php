<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/james/html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 04:02:05 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>James - Personal Portfolio HTML Template</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.ico" />
<!-- inject css start -->

<!--== bootstrap -->
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!--== animate -->
<link href="{{asset('front/css/animate.css')}}" rel="stylesheet" type="text/css" />
<!--== magnific-popup -->
<link href="{{asset('front/css/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
<!--== fontawesome -->
<link href="{{asset('front/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />
<!--== owl-carousel -->
<link href="{{asset('front/css/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
<!--== base -->
<link href="{{asset('front/css/base.css')}}" rel="stylesheet" type="text/css" />
<!--== default-theme -->
<link href="{{asset('front/css/default-theme.css')}}" rel="stylesheet" type="text/css" />
<!--== responsive -->
<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<!-- inject css end -->

</head>

<body data-spy="scroll" data-target=".navbar-nav" data-offset="100">

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader"><img src="images/loader.gif" alt=""></div>
</div>

<!-- preloader end -->

<!--header start-->

<header class="site-header header">  
  <div id="header-wrap">
    <div class="container">      
      <div class="row">
        <!--menu start-->
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.html">
              <img class="img-center" src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/"> <span>Home</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/"> <span>About</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services"> <span>Services</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/"> <span>portfolio</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/"> <span>Testimonials</span>
                  </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/"> <span>Blog</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/"> <span>Contact us</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!--menu end-->
      </div>
    </div>
  </div>
</header>

<!--header end-->


<!--hero section start-->
 
<section class="sub-banner dark-bg o-hidden text-center grediant-overlay parallaxie" data-bg-img="images/bg/05.jpg" data-overlay="7">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 ml-auto mr-auto">
          <h1>Blog Details</h1>
        </div>
      </div>
    </div>
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<!--blog start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="left-sidebar white-bg">

            <div class="post-image">
              <img class="img-fluid" src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="">
            </div>
              <div class="blog-details">           
              <div class="post-desc">
                <div class="post-date">{{$blog -> created_at}}</div>
                <div class="post-title mt-3">
                  <h4>
                    {{$blog -> title}}
                  </h4>
                </div>
                <p class="lead">{{$blog -> content}}</p>
              </div>
                        <blockquote class="mt-5">{{$blog -> short_content}}</blockquote>


            <div class="media-holder mt-5">
              <h3 class="title mb-3">All <span>Comments</span></h3>

			@foreach($blog_comments as $v_info)
              <div class="media">
                <img class="img-center rounded-circle mr-3" alt="image" style="height: 100px;width: 100px;" src="{{asset('front/images/blog/Comment_Image.jpg')}}">
                <div class="media-body">
                  <h6>{{$v_info -> name}}</h6>
                  <div class="comment-date"> <span class="date">{{ $v_info -> created_at }}</span>
                  </div>
                  <p>{{ $v_info -> message }}</p>
                  <div class="reply"> <a href="#" class="comment-reply"><i class="fas fa-reply-all"></i></a>
                  </div>
                </div>
              </div>
			@endforeach

            </div>

            <div class="post-comments mt-5 pos-r">
              <div class="section-title mb-3">
                <h3 class="title">Leave A <span>Comment</span></h3>
              </div>

             <form  method="post" action="{{route('user_comment')}}">

             	@csrf 
                <div class="messages"></div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Your Comment" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    
                  </div>
                </div>

                <button type="submit"><span>Comment</span>
                 </button>

              </form>

            </div>
            </div>
          </div>
          </div>
      </div>
    </div>
</section>

<!--blog end-->

</div>

<!--body content end--> 


<!--footer start-->

<footer class="theme-bg py-5">
  <div class="container">
    <div class="row text-center text-white">
      <div class="col-md-12">
        <div class="logo">
          <img class="img-center" src="images/logo-white.png" alt="">
        </div>
        <div class="social-icon my-4">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a href="#"> <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#"> <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#"> <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#"> <i class="fab fa-skype"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#"> <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        <span>Copyright 2018 James Theme by <a class="text-black" target="_blank" href="www.themeht.html"> ThemeHt </a> | All Rights Reserved</span>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->

</div>

<!--page wrapper end-->

<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-idea"></i></a></div>

<!--back-to-top end-->
 
<!-- inject js start -->

<!--== jquery -->
<script src="{{asset('front/js/jquery.3.3.1.min.js')}}"></script>
<!--== popper -->
<script src="{{asset('front/js/popper.min.js')}}"></script>
<!--== bootstrap -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<!--== appear -->
<script src="{{asset('front/js/jquery.appear.js')}}"></script> 
<!--== magnific-popup -->
<script src="{{asset('front/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
<!--== typer -->
<script src="{{asset('front/js/typer/animated-headlines.js')}}"></script> 
<!--== owl-carousel -->
<script src="{{asset('front/js/owl-carousel/owl.carousel.min.js')}}"></script> 
<!--== parallax -->
<script src="{{asset('front/js/parallax/parallaxie.min.js')}}"></script> 
<!--== counter -->
<script src="{{asset('front/js/counter/counter.js')}}"></script> 
<!--== isotope -->
<script src="{{asset('front/js/isotope/isotope.pkgd.min.js')}}"></script> 
<!--== contact-form -->
<script src="{{asset('front/js/contact-form/contact-form.js')}}"></script>
<!--== validate -->
<script src="{{asset('front/js/contact-form/jquery.validate.min.js')}}"></script>
<!--== map api -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('front/js/map.js')}}"></script>
<!--== canvas -->
<script src="{{asset('front/js/particle/canvas.js')}}"></script> 
<script src="{{asset('front/js/particle/confetti.js')}}"></script> 
<!--== theme-script -->
<script src="{{asset('front/js/theme-script.js')}}"></script>

<!-- inject js end -->

</body>

<!-- Mirrored from themeht.com/james/html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 04:02:17 GMT -->
</html>
