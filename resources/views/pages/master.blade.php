<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Revive</title>

    <link
      href="{{URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i')}}"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{URL::asset('css/linearicons.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('bootstrap-datepicker.css')}}css/" />
    <link rel="stylesheet" href="{{URL::asset('css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}" />
    
  </head>

  <body>
    <!--================ Start Header Area =================-->
    <header class="header-area">
      <div class="container">
        <div class="header-wrap">
          <div
            class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
          >
            <div class="col menu-left">
              <a class="active" href="{{URL::asset('/')}}">Home</a>
              <a href="{{URL::asset('/category')}}">Category</a>
              <a href="{{URL::asset('/archive')}}">Archive</a>
            </div>
            <div class="col-5 text-lg-center mt-2 mt-lg-0">
              <span class="logo-outer">
                <span class="logo-inner">
                  <a href="index.html"
                    ><img class="mx-auto" src="img/logo.png" alt=""
                  /></a>
                </span>
              </span>
            </div>
            <nav class="col navbar navbar-expand-lg justify-content-end">
              <!-- Toggler/collapsibe Button -->
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavbar"
              >
                <span class="lnr lnr-menu"></span>
              </button>

              <!-- Navbar links -->
              <div
                class="collapse navbar-collapse menu-right"
                id="collapsibleNavbar"
              >
                <ul class="navbar-nav justify-content-center w-100">
                  <li class="nav-item hide-lg">
                    <a class="nav-link" href="{{URL::asset('/')}}">Home</a>
                  </li>
                  <li class="nav-item hide-lg">
                    <a class="nav-link" href="{{URL::asset('/category')}}">Category</a>
                  </li>
                  <!-- Dropdown -->
                  <!-- <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbardrop"
                      data-toggle="dropdown"
                    >
                      Pages
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="elements.html">Elements</a>
                    </div>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/elements')}}">Elements</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/blog')}}">Blog Detail</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/contact')}}">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admin')}}">Admin</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!--================ End Header Area =================-->

  @yield('content')

    <!--================ Start Footer Area =================-->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Us</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>Stay update with our latest</p>
              <div class="" id="mc_embed_signup">
  
                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                 method="get" class="form-inline">
  
                  <div class="d-flex flex-row">
  
                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                     required="" type="email">
  
  
                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                    <div style="position: absolute; left: -5000px;">
                      <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>
  
                    <!-- <div class="col-lg-4 col-md-4">
                          <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                        </div>  -->
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Instragram Feed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="img/instagram/i1.jpg" alt=""></li>
                <li><img src="img/instagram/i2.jpg" alt=""></li>
                <li><img src="img/instagram/i3.jpg" alt=""></li>
                <li><img src="img/instagram/i4.jpg" alt=""></li>
                <li><img src="img/instagram/i5.jpg" alt=""></li>
                <li><img src="img/instagram/i6.jpg" alt=""></li>
                <li><img src="img/instagram/i7.jpg" alt=""></li>
                <li><img src="img/instagram/i8.jpg" alt=""></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <p>Let us be social</p>
              <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
          <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </footer>
    <!--================ End Footer Area =================-->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
    ></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
