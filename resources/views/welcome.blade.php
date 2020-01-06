<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/james/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 04:00:01 GMT -->
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

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="100">

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->
<div id="ht-preloader">
  <div class="loader clear-loader"><img src="{{asset('front/images/loader.gif')}}" alt=""></div>
</div>
<!-- preloader end -->


<!--header start-->
<header class="site-header header header-2">  
  <div id="header-wrap">
    <div class="container">      
      <div class="row">
        <!--menu start-->
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="/">
              <img class="img-center" src="{{asset('front/images/logo-theme.png')}}" alt="">
              <img class="img-center sticky-logo" src="{{asset('front/images/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#home"> <span>Home</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services"> <span>Services</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"> <span>About</span>
                  </a>
                </li>                
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio"> <span>portfolio</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#testimonial"> <span>Testimonials</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#blog"> <span>Blog</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact-us"> <span>Contact us</span>
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

<section class="fullscreen-banner o-hidden p-0 dark-bg parallaxie text-white" data-bg-img="{{asset('front/images/bg/Najmun123234.jpg')}}" data-overlay="3">
  <canvas id="canvas-1"></canvas>
  <div class="align-center text-left">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mr-auto">
          <ul class="list-inline bnr-list mb-3">
            <li class="list-inline-item">Web Design</li>
            <li class="list-inline-item">Development</li>
            <li class="list-inline-item">Freelancer</li>
          </ul>
          <h1 class="cd-headline letters scale mb-3">
              <span class="d-block text-theme">Hi I'm</span> 
              <span class="cd-words-wrapper text-white">
                <b class="is-visible"><span>Najmun</span> Nafiz</b>

                @foreach($sliders as $v_info)
                <b>{{$v_info -> carrear}}</b>
                @endforeach

              </span>
            </h1>
          <p class="text-white lead mb-3">I Can Develop To Your Business Portfolio, let's Build Something<br> Great And Creative For You</p>
          <a class="btn btn-white btn-border" href="#contact-us"> <span>Hire Me</span>
          </a>
          <a class="btn btn-white btn-circle page-scroll" href="#about"> <span>learn More</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--hero section end--> 


<!--body content start-->
<div class="page-content">

<!--awesome features start-->
<section id="services" class="text-center pos-r o-hidden">
   <canvas id="confetti"></canvas>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Awesome <span>Service</span></h2>
          <p class="mb-0">James libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="featured-item style-2">
          <div class="featured-icon">
            <i class="flaticon-web-design"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h4 class="mb-3">Web Designs</h4>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>          
        </div>
      </div>
      <div class="col-lg-4 col-md-6 sm-mt-5">
        <div class="featured-item style-2">
          <div class="featured-icon">
            <i class="flaticon-seo"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h4 class="mb-3">Web development</h4>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 md-mt-5">
        <div class="featured-item style-2">
          <div class="featured-icon">
            <i class="flaticon-responsive"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h4 class="mb-3">Responsive Design</h4>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item style-2">
          <div class="featured-icon">
            <i class="flaticon-landscape"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h4 class="mb-3">Photography</h4>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item style-2">
          <div class="featured-icon">
            <i class="flaticon-psd"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h4 class="mb-3">Web Researcher</h4>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="featured-item style-2">
          <div class="featured-icon">
            <i class="flaticon-question"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h4 class="mb-3">Dedicated support</h4>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--awesome features end-->


<!--about start-->
<section id="about" class="theme-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 mr-auto">
        <div class="section-title">
          <h2 class="title z-index-1">About <span>me</span></h2>
          <p class="text-white">James libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
         @foreach($aboutme as $v_info)
        <div class="about-desc text-white">

         
          <h4 style="font-weight: 800;font-size: 30px;">{{ $v_info -> name }}</h4>
          <h5 class="mb-3 font-italic font-weight-bold">{{ $v_info -> profession }}</h5>
          <p>{{ $v_info -> description }}</p>
          <ul class="list-inline mb-4">
            <li class="list-inline-item mr-3"> <i class="flaticon-phone-3"></i>
              <a href="tel:+912345678900">{{ $v_info -> mobile }}</a>
            </li>
            <li class="list-inline-item"> <i class="flaticon-newsletter"></i>
              <a href="mailto:htinfotech7@gmail.com">{{ $v_info -> email }}</a>
            </li>
          </ul> <a class="btn btn-white btn-border btn-radius" href="#contact-us">Hire Me</a>
          <a class="btn btn-white btn-circle" href="#">Download CV</a>
        
        </div>
         @endforeach
      </div>
      <div class="col-lg-6 col-md-12 md-mt-5">
        <div class="ht-progress-bar">
          <h4>Creative Designer</h4>
          <div class="progress" data-value="95">
            <div class="progress-bar progress-bar-striped progress-bar-animated">
              <div class="progress-parcent"><span>95</span>%</div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar">
          <h4>Wordpress</h4>
          <div class="progress" data-value="70">
            <div class="progress-bar progress-bar-striped progress-bar-animated">
              <div class="progress-parcent"><span>70</span>%</div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar">
          <h4>Html & Css</h4>
          <div class="progress" data-value="90">
            <div class="progress-bar progress-bar-striped progress-bar-animated">
              <div class="progress-parcent"><span>90</span>%</div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar">
          <h4>JavaScript</h4>
          <div class="progress" data-value="80">
            <div class="progress-bar progress-bar-striped progress-bar-animated">
              <div class="progress-parcent"><span>80</span>%</div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar">
          <h4>Photoshop</h4>
          <div class="progress" data-value="85">
            <div class="progress-bar progress-bar-striped progress-bar-animated">
              <div class="progress-parcent"><span>85</span>%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--about end-->


<!--portfolio start-->
<section id="portfolio">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Creative <span>Portfolio</span></h2>
          <p class="mb-0">James libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked">All</button>

          @foreach($categories as $v_info)
            <button data-filter="#{{ $v_info -> id }}">{{ $v_info -> name }}<span class="badge" style="background-color: green;padding: 5px;border-radius: 100%;color: white;margin-left: 5px;">{{ $v_info -> portfolio -> count() }}</span></button>
          @endforeach         
        </div>

        <div class="masonry row columns-4 no-gutters popup-gallery">
          <div class="grid-sizer"></div>

          @foreach($portfolios as $v_info)
            <div class="masonry-brick" id = "{{ $v_info -> category -> id }}">
              
              <div class="portfolio-item">
                <img src="{{ asset('uploads/portfolio/'.$v_info->image) }}" alt="">
                <div class="portfolio-hover">
                  <div class="portfolio-title">
                   <span>Design, Cretive</span>
                    <h5>{{ $v_info -> projectname }}</h5>
                  </div>
                  <div class="portfolio-icon">
                    <a class="popup popup-img" href="{{ asset('uploads/portfolio/'.$v_info->image) }}"> <i class="flaticon-add-song"></i>
                    </a>
                    <a class="popup portfolio-link" target="_blank" href="{{route('portfolio_details',$v_info -> id)}}"> <i class="flaticon-link-1"></i>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>
<!--portfolio end-->


<!--counter start-->
<section class="dark-bg text-center">
  <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="counter text-white"> <span class="count-number" data-to="150" data-speed="10000">150</span>
            <label>complete Project</label>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="counter text-white"> <span class="count-number" data-to="175" data-speed="10000">175</span>
            <label>Lines of Code</label>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="counter text-white"> <span class="count-number" data-to="344" data-speed="10000">344</span>
            <label>Coffee Cup</label>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="counter text-white"> <span class="count-number" data-to="125" data-speed="10000">125</span>
            <label>Happy Clients</label>
          </div>
        </div>
      </div>
  </div>
</section>
<!--counter end-->


<!--testimonial start-->
<section id="testimonial" class="grey-bg text-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-10 col-md-12 ml-auto mr-auto">
        <div class="owl-carousel owl-theme" data-items="1">
          <div class="item">
            <div class="testimonial style-2">
              <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                <p>“ Consectetur adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi, adipisci quam laudantium nulla modi. ”</p>
              </div>
              <div class="testimonial-caption">
                <h6>James haldoe</h6>
                <label>- Designer</label>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="{{asset('front/images/thumbnail/01.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial style-2">
              <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                <p>“ Totam mollitia incidunt Consectetur adipisicing elit, vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi, adipisci quam laudantium nulla modi. ”</p>
              </div>
              <div class="testimonial-caption">
                <h6>James haldoe</h6>
                <label>- Developer</label>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="{{asset('front/images/thumbnail/01.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial style-2">
              <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                <p>“ Quae adipisci quam laudantium nulla modi, Consectetur adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, adipisci quam laudantium nulla modi. ”</p>
              </div>
              <div class="testimonial-caption">
                <h6>James haldoe</h6>
                <label>- Freelancer</label>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="{{asset('front/images/thumbnail/01.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--testimonial end-->


<!--blog start-->
<section id="blog">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title z-index-1">See Latest <span>Blog</span></h2>
          <p class="mb-0">James libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme" data-items="3" data-md-items="2" data-sm-items="1" data-margin="30">


          @foreach($blogs as $v_info)
          <div class="item">
            <div class="post style-2">
            <div class="post-desc" style="width: 100%;height: 340px;">
              <div class="post-date">{{$v_info -> created_at}}</div>
              <div class="post-title">
                <h4><a href="{{route('blog_details',$v_info -> id)}}">{{$v_info -> title}}</a></h4>
              </div>
              <p class="mb-0" style="height: 120px;width: 100%;">{{$v_info -> short_content}}</p>
              <a style="margin-top: 5px;" class="btn-simple mt-3" href="{{route('blog_details',$v_info -> id)}}">Read More <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
            </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!--blog end-->


<!--contact-us start-->
<section id="contact-us" class="dark-bg parallaxie text-white" data-bg-img="{{asset('front/images/bg/najmun2.jpg')}}" data-overlay="8">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Let's <span>Contact Us</span></h2>
          @foreach($add_contact as $v_info)

            <p class="mb-0 text-white">{{ $v_info->content}}</p>

          @endforeach
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-12">
        <div class="contact-box">

          <form method="post" action="{{route('usercontact')}}">
            @csrf

            <div class="messages"></div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>First Name</label>
                  <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Type First name" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Type Last name" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email Address</label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Type Email" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone Number</label>
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Type Phone" required="required" data-error="Phone is required">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Message</label>
                  <textarea id="form_message" name="message" class="form-control" placeholder="Type Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12 mt-2"> <button class="btn btn-border btn-circle"><span>Send Message</span></button>
              </div>
            </div>

          </form>

        </div>
      </div>

      @foreach($add_contact as $v_info)

      <div class="col-lg-4 col-md-12 text-center md-mt-5">
          <ul class="contact-info list-unstyled">
              <li><i class="flaticon-innovation"></i><span>Address:</span>
                <p>{{ $v_info -> address }}</p>
              </li>
              <li><i class="flaticon-phone-1"></i><span>Phone:</span><a href="tel:+912345678900">{{ $v_info -> phone }}</a>
              </li>
              <li><i class="flaticon-email"></i><span>Email</span><a href="mailto:htinfotech7@gmail.com"> {{ $v_info -> email }}</a>
              </li>
            </ul>
        </div>

        @endforeach

    </div>
  </div>
</section>

<section class="o-hidden p-0">
    <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-12">
        <div id="map" class="iframe-h mt-0"></div>
      </div>
    </div>
  </div>
</section>
<!--contact-us end-->

</div>
<!--body content end--> 


<!--footer start-->
<footer class="theme-bg py-5">
  <div class="container">
    <div class="row text-center text-white">
      <div class="col-md-12">
        <div class="logo">
          <img class="img-center" src="{{asset('front/images/logo-white.png')}}" alt="">
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
        <span>Copyright 2019 James Theme by <a class="text-black" target="_blank" href="www.themeht.html"> Najmun_Nafiz </a> | All Rights Reserved</span>
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


<!-- Mirrored from themeht.com/james/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 04:00:48 GMT -->
</html>
