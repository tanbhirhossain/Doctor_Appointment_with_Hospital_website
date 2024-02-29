<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="description" content>
      <meta name="keywords" content>
      <meta name="author" content>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Exo:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('front/asset/images/favicon.png')}}" type="image/x-icon">
      <link rel="icon" href="{{ asset('front/asset/images/favicon.png')}}" type="image/x-icon">
      <title>@yield('page-title')</title>
      <link href="{{ asset('front/asset/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/jquery-ui.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/icomoon-icons.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/animate.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/flaticon.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/owl.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/animation.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/magnific-popup.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/jquery.fancybox.min.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/menu.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/style.css')}}" rel="stylesheet">
      <link href="{{ asset('front/asset/css/responsive.css')}}" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
      <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

      @yield('css')
   </head>
   <body>
      <div class="page-wrapper">
         <div class="preloader"></div>
        <!-- Header -->
        @include('front.layouts.components.medicoz.header')
       
        <!-- PAGE CONTENT -->
        @yield('page-content')


        <section class="fullwidth-section-two">
         <div class="outer-container">
            <div class="clearfix">
               <div class="left-column" style="background-image:url({{ asset('front/asset/images/background/5.jpg')}})">
                  <div class="inner-column">
                     <h2>Subscribe to our <br> Newsletter</h2>
                     <div class="subscribe-form">
                        <form method="post" action="">
                           <div class="form-group">
                              <input type="email" name="email" value placeholder="Enter your mail here" required>
                              <button type="submit" class="theme-btn subscribe-btn"><span class="icon icon-envelope3"></span> Subscribe</button>
                           </div>
                        </form>
                     </div>
                     <p class="text">***We Promise, no spam!</p>
                  </div>
               </div>
               <div class="right-column" style="background-image:url({{ asset('front/asset/images/background/6.jpg')}})">
                  <div class="inner-column">
                     <a href="tel:+1-812-243-7969" class="phone">
                     <span class="icon-box flaticon-24-hours"></span>
                     <span class="title">Emergency Medical Care</span><strong>{{ $site_setting->phone }}</strong>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
        @include('front.layouts.components.medicoz.footer')


        
        
      </div>
      <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon icon-chevron-up"></span></div>
      <div class="xs-sidebar-group info-group">
         <div class="xs-overlay xs-bg-black"></div>
         <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
               <div class="widget-heading">
                  <a href="#" class="close-side-widget">
                  <span class="icon icon-cross"></span>
                  </a>
               </div>
               <div class="sidebar-textwidget">
                  <div class="sidebar-info-contents">
                     <div class="content-inner">
                        <div class="logo">
                           {{-- <a href="index-2.html"><img src="{{ asset('front/asset/images/logo-2.png')}}" alt /></a> --}}
                           <a href="{{ url('/') }}"><img style="background-color:white;" src="{{ asset($site_setting->logo_header)}}" alt /></a>

                        </div>
                        <div class="content-box">
                           <h2>About Us</h2>
                           <p class="text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and expound.</p>
                           <a href="#" class="theme-btn btn-style-one"><i>Consultation</i></a>
                        </div>
                        <div class="contact-info">
                           <h2>Contact Info</h2>
                           <ul class="list-style-one">
                              <li><span class="icon flaticon-map-1"></span>{{ $site_setting->address }}</li>
                              <li><span class="icon flaticon-telephone"></span>{{ $site_setting->phone }}</li>
                              <li><span class="icon flaticon-letter"></span>{{ $site_setting->email }}</li>
                              <li><span class="icon flaticon-clock-2"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                           </ul>
                        </div>
                        <ul class="social-box">
                           <li class="facebook"><a href="{{ $site_setting->facebook_id }}" class="icon icon-facebook"></a></li>
                           <li class="twitter"><a href="#" class="icon icon-twitter"></a></li>
                           <li class="linkedin"><a href="{{ $site_setting->linkedin_id }}" class="icon icon-linkedin"></a></li>
                           <li class="instagram"><a href="{{ $site_setting->instagram_id }}" class="icon icon-instagram"></a></li>
                           <li class="youtube"><a href="{{ $site_setting->youtube_id }}" class="icon icon-youtube"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="xs-sidebar-group cart-group">
         <div class="xs-overlay xs-bg-black"></div>
         <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
               <div class="widget-heading media">
                  <div class="media-body">
                     <a href="#" class="close-side-widget">
                     <span class="icon icon-cross"></span>
                     </a>
                  </div>
               </div>
               <div class="xs-empty-content">
                  <div class="cart-product">
                     <div class="inner">
                        <div class="cross-icon"><span class="icon icon-cross"></span></div>
                        <div class="image"><img src="{{ asset('front/asset/images/resource/treatment-one.jpg')}}" alt /></div>
                        <h3><a href="shop-single.html">Treatment One</a></h3>
                        <div class="quantity-text">Quantity 1</div>
                        <div class="price">$39.00</div>
                     </div>
                  </div>
                  <div class="cart-product">
                     <div class="inner">
                        <div class="cross-icon"><span class="icon icon-cross"></span></div>
                        <div class="image"><img src="{{ asset('front/asset/images/resource/treatment-two.jpg')}}" alt /></div>
                        <h3><a href="shop-single.html">Treatment Two</a></h3>
                        <div class="quantity-text">Quantity 1</div>
                        <div class="price">$69.00</div>
                     </div>
                  </div>
                  <div class="cart-product">
                     <div class="inner">
                        <div class="cross-icon"><span class="icon icon-cross"></span></div>
                        <div class="image"><img src="{{ asset('front/asset/images/resource/treatment-three.jpg')}}" alt /></div>
                        <h3><a href="shop-single.html">Treatment Three</a></h3>
                        <div class="quantity-text">Quantity 1</div>
                        <div class="price">$99.00</div>
                     </div>
                  </div>
                  <p class="xs-btn-wraper">
                     <a class="btn btn-style-three" href="#">Return To Shop</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
         <div class="xs-search-panel">
            <form action="#" method="POST" class="xs-search-group">
               <input type="search" class="form-control" name="search" id="search" placeholder="Search">
               <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
            </form>
         </div>
      </div>
      
      <script data-cfasync="false" src="https://html.xpeedstudio.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{ asset('front/asset/js/jquery.js')}}"></script>
      <script src="{{ asset('front/asset/js/popper.min.js')}}"></script>
      <script src="{{ asset('front/asset/js/jquery-ui.js')}}"></script>
      <script src="{{ asset('front/asset/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('front/asset/js/jquery.fancybox.js')}}"></script>
      <script src="{{ asset('front/asset/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ asset('front/asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('front/asset/js/owl.js')}}"></script>
      <script src="{{ asset('front/asset/js/mixitup.js')}}"></script>
      <script src="{{ asset('front/asset/js/paroller.js')}}"></script>
      <script src="{{ asset('front/asset/js/wow.js')}}"></script>
      <script src="{{ asset('front/asset/js/main.js')}}"></script>
      <script src="{{ asset('front/asset/js/nav-tool.js')}}"></script>
      <script src="{{ asset('front/asset/js/jquery-ui.js')}}"></script>
      <script src="{{ asset('front/asset/js/appear.js')}}"></script>
      <script src="{{ asset('front/asset/js/script.js')}}"></script>

      @yield('js')
   </body>
</html>