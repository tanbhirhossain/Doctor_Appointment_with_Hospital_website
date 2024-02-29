@extends('front.layouts.medicoz_master')

@section('page-title', 'AMZ Hospital Ltd. | For amazing Care &#8211; Uttar Badda , Dhaka-1212')

@section('page-content')
        <!-- Slider -->
        @include('front.layouts.components.medicoz.slider')
         <section class="services-form-section">
            <div class="image-layer" style="background-image:url(images/background/1.png)"></div>
            <div class="container ">
               <div class="services-form">
                  <form method="post" action="#">
                     <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                           <div class="map-icon fas fa-map-marker-alt"></div>
                           <div class="location-icon icon-target"></div>
                           <select class="custom-select-box">
                              <option>Select your area</option>
                              <option>Area One</option>
                              <option>Area Two</option>
                              <option>Area Three</option>
                              <option>Area Four</option>
                           </select>
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                           <select class="custom-select-box">
                              <option>Select Service type</option>
                              <option>Service One</option>
                              <option>Service Two</option>
                              <option>Service Three</option>
                              <option>Service Four</option>
                           </select>
                        </div>
                        <div class="form-group button-group col-lg-4 col-md-12 col-sm-12">
                           <div class="left-curves"></div>
                           <div class="right-curves"></div>
                           <button class="theme-btn submit-btn" type="submit" name="submit-form">Get Your Service Now</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </section>
         <section class="featured-section">
            <div class="pattern-layer" style="background-image:url(images/background/pattern-1.png)"></div>
            <div class="container">
               <div class="row">
                  <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon flaticon-pill"></span>
                        </div>
                        <h3><a href="#">Specialised <br> Support</a></h3>
                        <p>The hospital plays a statewide role in rehabilitation services, which includes the Acquired</p>
                     </div>
                  </div>
                  <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-diagnosis"></span>
                        </div>
                        <h3><a href="#">Diagnosis & <br> Investigation</a></h3>
                        <p>Hospital doctors examine patients so that they can diagnose and treat health conditions</p>
                     </div>
                  </div>
                  <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-medical1"></span>
                        </div>
                        <h3><a href="#">Medical & <br> Surgical</a></h3>
                        <p>Medicine is a very wide field with many possible specialisms. Some doctors work in general</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="container-fluid">
            <div class="pattern-layer" style="background-image:url(images/background/pattern-2.png)"></div>
            <div class="outer-section">
               <div class="clearfix">
                  <div class="left-column">
                     <div class="inner-column">
                        <div class="shadow-one paroller" style="background-image:url(images/icons/shadow-1.png)" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
                        <div class="shadow-two paroller" style="background-image:url(images/icons/shadow-2.png)" data-paroller-factor="-0.15" data-paroller-factor-lg="-0.15" data-paroller-factor-md="-0.15" data-paroller-factor-sm="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical"></div>
                        <div class="shadow-three paroller" style="background-image:url(images/icons/shadow-3.png)" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
                        <div class="image">
                           <img src="{{ asset('front/asset/images/resource/image-1.png')}}" alt />
                        </div>
                     </div>
                  </div>
                  <div class="right-column">
                     <div class="inner-column">
                        <h2>Hospital doctors examine patients so that they can diagnose</h2>
                        <ul class="featured-list">
                           <li class="wow fadeInUp clearfix" data-wow-delay="0ms" data-wow-duration="1500ms">
                              <span class="icon icon-brifecase-hospital2"></span>
                              <div class="content">
                                 <div class="title">Intensive care</div>
                                 <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              </div>
                           </li>
                           <li class="wow fadeInUp clearfix" data-wow-delay="300ms" data-wow-duration="1500ms">
                              <span class="icon icon-heart1"></span>
                              <div class="content">
                                 <div class="title">Specialised Support Service</div>
                                 <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              </div>
                           </li>
                           <li class="wow fadeInUp clearfix" data-wow-delay="600ms" data-wow-duration="1500ms">
                              <span class="icon icon-doctor"></span>
                              <div class="content">
                                 <div class="title">Medical & Surgical</div>
                                 <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="team-section">
            <div class="team-pattern-layer" style="background-image:url(images/background/pattern-1.png)"></div>
            <div class="team-pattern-layer-two" style="background-image:url(images/background/pattern-5.png)"></div>
            <div class="container">
               <div class="section-title text-center">
                     {{-- <h2>Meet Our Specialist</h2> --}}
                     <h2>Renowned Doctors from the Country
                     </h2>
                  <p class="text">The hospital plays a statewide role in rehabilitation services, which includes the Acquired</p>
               </div>
               <div class="team-carousel owl-carousel owl-theme">

                  @foreach ($home_page_doctors as $item)
                  <div class="team-block">
                     <div class="inner-box">
                        <div class="image">
                           <img src="{{ asset('front/asset/images/resource/team-1.jpg')}}" alt />
                           <div class="overlay-box">
                              <div class="overlay-inner">
                                 <ul class="team-social-box">
                                    <li class="youtube"><a href="#" class="icon icon-youtube"></a><span class="social-name">youtube</span></li>
                                    <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span class="social-name">linkedin</span></li>
                                    <li class="facebook"><a href="#" class="icon icon-facebook"></a><span class="social-name">facebook</span></li>
                                    <li class="twitter"><a href="#" class="icon icon-twitter"></a><span class="social-name">twitter</span></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="lower-content">
                           <div class="icon-box">
                              <span class="icon icon-heart1"></span>
                           </div>
                           <h3><a href="#">{{ $item->name }}</a></h3>
                           <p class="designation">{{ $item->speciality }}</p>
                        </div>
                     </div>
                  </div>
                  @endforeach
                 
                  
               </div>
            </div>
         </section>
    
         <section class="emergency-section" style="background-image:url(images/background/3.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="content-box">
                        <div class="inner-box">
                           <h2><span class="icon-box flaticon-24-hours"></span><strong>Emergency</strong> Medical Care 24/7</h2>
                           <p class="text">With access to 24 hour emergency assistance, It’s so important you can continue to help others.</p>
                           <p class="phone"><a href="tel:{{ $site_setting->phone }}"><span class="icon-box icon-phone_call"></span>{{ $site_setting->phone }}</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="services-section">
            <div class="container">
               <div class="section-title text-center">
                  <h2>Quick Amenities in Medizco</h2>
                  <p class="text">The hospital plays a statewide role in rehabilitation services, which includes the Acquired</p>
               </div>
               <div class="row">
                  <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-brifecase-hospital2"></span>
                        </div>
                        <h3><a href="#">Intensive care</a></h3>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     </div>
                  </div>
                  <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-hospital-symbol"></span>
                        </div>
                        <h3><a href="#">Online Medicine</a></h3>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     </div>
                  </div>
                  <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-heart1"></span>
                        </div>
                        <h3><a href="#">Lab Tests</a></h3>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     </div>
                  </div>
                  <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-ambulance"></span>
                        </div>
                        <h3><a href="#">Ambulance Car</a></h3>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     </div>
                  </div>
                  <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-capsule"></span>
                        </div>
                        <h3><a href="#">Tabs and Pills</a></h3>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     </div>
                  </div>
                  <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                           <span class="icon icon-book"></span>
                        </div>
                        <h3><a href="#">Health Check</a></h3>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="gallery-section">
            <div class="image-layer" style="background-image:url(images/background/4.jpg)"></div>
            <div class="container">
               <div class="title-box">
                  <h2>Gallery of Medizco Center</h2>
               </div>
               <div class="row">
                  <div class="project-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                        <div class="image">
                           <img src="{{ asset('front/asset/images/gallery/1.jpg')}}" alt />
                           <div class="overlay-box">
                              <div class="overlay-inner">
                                 <div class="overlay-content">
                                    <div class="icon-box">
                                       <span class="icon icon-heart1"></span>
                                    </div>
                                    <h3><a href="doctor-detail.html">Online Medicine</a></h3>
                                    <a class="plus" href="{{ asset('front/asset/images/gallery/1.jpg')}}" data-fancybox="gallery-1" data-caption><span class="flaticon-plus-symbol"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="project-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                        <div class="image">
                           <img src="{{ asset('front/asset/images/gallery/2.jpg')}}" alt />
                           <div class="overlay-box">
                              <div class="overlay-inner">
                                 <div class="overlay-content">
                                    <div class="icon-box">
                                       <span class="icon icon-heart1"></span>
                                    </div>
                                    <h3><a href="doctor-detail.html">Online Medicine</a></h3>
                                    <a class="plus" href="{{ asset('front/asset/images/gallery/2.jpg')}}" data-fancybox="gallery-1" data-caption><span class="flaticon-plus-symbol"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="project-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                        <div class="image">
                           <img src="{{ asset('front/asset/images/gallery/3.jpg')}}" alt />
                           <div class="overlay-box">
                              <div class="overlay-inner">
                                 <div class="overlay-content">
                                    <div class="icon-box">
                                       <span class="icon icon-heart1"></span>
                                    </div>
                                    <h3><a href="doctor-detail.html">Online Medicine</a></h3>
                                    <a class="plus" href="{{ asset('front/asset/images/gallery/3.jpg')}}" data-fancybox="gallery-1" data-caption><span class="flaticon-plus-symbol"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="project-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                        <div class="image">
                           <img src="{{ asset('front/asset/images/gallery/4.jpg')}}" alt />
                           <div class="overlay-box">
                              <div class="overlay-inner">
                                 <div class="overlay-content">
                                    <div class="icon-box">
                                       <span class="icon icon-heart1"></span>
                                    </div>
                                    <h3><a href="doctor-detail.html">Online Medicine</a></h3>
                                    <a class="plus" href="images/gallery/4.jpg" data-fancybox="gallery-1" data-caption><span class="flaticon-plus-symbol"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="project-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                        <div class="image">
                           <img src="{{ asset('front/asset/images/gallery/5.jpg')}}" alt />
                           <div class="overlay-box">
                              <div class="overlay-inner">
                                 <div class="overlay-content">
                                    <div class="icon-box">
                                       <span class="icon icon-heart1"></span>
                                    </div>
                                    <h3><a href="doctor-detail.html">Online Medicine</a></h3>
                                    <a class="plus" href="{{ asset('front/asset/images/gallery/5.jpg')}}" data-fancybox="gallery-1" data-caption><span class="flaticon-plus-symbol"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="project-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                        <div class="image">
                           <img src="{{ asset('front/asset/images/gallery/6.jpg')}}" alt />
                           <div class="overlay-box">
                              <div class="overlay-inner">
                                 <div class="overlay-content">
                                    <div class="icon-box">
                                       <span class="icon icon-heart1"></span>
                                    </div>
                                    <h3><a href="doctor-detail.html">Online Medicine</a></h3>
                                    <a class="plus" href="{{ asset('front/asset/images/gallery/6.jpg')}}" data-fancybox="gallery-1" data-caption><span class="flaticon-plus-symbol"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="button-box text-center">
                  <a href="gallery.html" class="theme-btn btn-style-three">View All <span class="arrow icon-chevron-right"></span></a>
               </div>
            </div>
         </section>
         <section class="events-section">
            <div class="pattern-layer-two" style="background-image:url(images/background/pattern-5.png)"></div>
            <div class="container">
               <div class="title-box">
                  <div class="clearfix">
                     <div class="pull-left">
                        <h2>Recent Events</h2>
                     </div>
                     <div class="pull-right">
                        <a href="#" class="view-events">View all Events <span class="arrow fa fa-angle-right"></span></a>
                     </div>
                  </div>
               </div>
               <div class="inner-container">
                  <div class="pattern-layer-one" style="background-image:url(images/background/pattern-4.png)"></div>
                  <div class="row">
                     <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="event-block">
                           <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                              <div class="upper-box clearfix">
                                 <div class="event-date">
                                    <strong>25</strong>Dec
                                 </div>
                                 <div class="image">
                                    <img src="{{ asset('front/asset/images/resource/author-1.jpg')}}" alt />
                                 </div>
                                 <ul class="event-list">
                                    <li><span class="icon icon-map-marker2"></span>Destiny Hall, 5th Floor</li>
                                    <li><span class="icon icon-clock3"></span>10am to 3pm</li>
                                 </ul>
                              </div>
                              <h3><a href="appointment.html">National Assessment and Accrediation for Council Peer Team Visited...</a></h3>
                              <a href="event-detail.html" class="theme-btn btn-style-four">join now <span class="arrow fa fa-angle-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="event-block-two">
                           <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                              <div class="content clearfix">
                                 <div class="event-date">
                                    <strong>26</strong>Dec
                                 </div>
                                 <ul class="event-list">
                                    <li><span class="icon icon-map-marker2"></span>Charlotte Hall</li>
                                    <li><span class="icon icon-clock3"></span>10am to 3pm</li>
                                 </ul>
                                 <h3><a href="appointment.html">Medicine is a very wide field with many possible specialisms...</a></h3>
                              </div>
                           </div>
                        </div>
                        <div class="event-block-two">
                           <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                              <div class="content clearfix">
                                 <div class="event-date">
                                    <strong>28</strong>Dec
                                 </div>
                                 <ul class="event-list">
                                    <li><span class="icon icon-map-marker2"></span>Royal Lounge</li>
                                    <li><span class="icon icon-clock3"></span>10am to 3pm</li>
                                 </ul>
                                 <h3><a href="appointment.html">Hospital doctors examine patients so that they can diagnose...</a></h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="testimonial-section">
            <div class="container">
               <div class="section-title text-center">
                  <h2>Service Recipient Says</h2>
               </div>
               <div class="testimonials-carousel owl-carousel owl-theme">
                  <div class="testimonial-block">
                     <div class="inner-box">
                        <div class="content-box">
                           <div class="quote-icon icon-quote2"></div>
                           <p class="text">Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious.</p>
                           <h3>Kolis Muller</h3>
                           <p class="designation">NY Citizen</p>
                        </div>
                        <div class="image-box">
                           <img src="{{ asset('front/asset/images/resource/author-2.png')}}" alt />
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-block">
                     <div class="inner-box">
                        <div class="content-box">
                           <div class="quote-icon icon-quote2"></div>
                           <p class="text">Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious.</p>
                           <h3>Kolis Muller</h3>
                           <p class="designation">NY Citizen</p>
                        </div>
                        <div class="image-box">
                           <img src="{{ asset('front/asset/images/resource/author-3.png')}}" alt />
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-block">
                     <div class="inner-box">
                        <div class="content-box">
                           <div class="quote-icon icon-quote2"></div>
                           <p class="text">Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious.</p>
                           <h3>Kolis Muller</h3>
                           <p class="designation">NY Citizen</p>
                        </div>
                        <div class="image-box">
                           <img src="{{ asset('front/asset/images/resource/author-4.png')}}" alt />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="news-section">
            <div class="pattern-layer-one" style="background-image:url(images/background/pattern-6.png)"></div>
            <div class="pattern-layer-two" style="background-image:url(images/background/pattern-7.png)"></div>
            <div class="container">
               <div class="section-title text-center">
                  <h2>News & Blog</h2>
                  <div class="text">The hospital plays a statewide role in rehabilitation services, which includes the Acquired</div>
               </div>
               <div class="news-carousel owl-carousel owl-theme">
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-1.jpg')}}" alt /></a>
                           <div class="post-date"><strong>25</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">Hospital doctors examine patients so that...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-2.jpg')}}" alt /></a>
                           <div class="post-date"><strong>26</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">The website of the Royal Melbourne Hospital...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-3.jpg')}}" alt /></a>
                           <div class="post-date"><strong>28</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">Result is a regal and trust worthy look that...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-1.jpg')}}" alt /></a>
                           <div class="post-date"><strong>25</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">Hospital doctors examine patients so that...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-2.jpg')}}" alt /></a>
                           <div class="post-date"><strong>26</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">The website of the Royal Melbourne Hospital...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-3.jpg')}}" alt /></a>
                           <div class="post-date"><strong>28</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">Result is a regal and trust worthy look that...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-1.jpg')}}" alt /></a>
                           <div class="post-date"><strong>25</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">Hospital doctors examine patients so that...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-2.jpg')}}" alt /></a>
                           <div class="post-date"><strong>26</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">The website of the Royal Melbourne Hospital...</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="news-block">
                     <div class="inner-box">
                        <div class="image">
                           <a href="blog-detail.html"><img src="{{ asset('front/asset/images/resource/news-3.jpg')}}" alt /></a>
                           <div class="post-date"><strong>28</strong>dec</div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><a href="blog-detail.html"><span class="icon icon-user"></span>Oliver Liam</a></li>
                              <li><a href="blog-detail.html"><span class="icon icon-folders"></span>Surgical</a></li>
                           </ul>
                           <h3><a href="blog-detail.html">Result is a regal and trust worthy look that...</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="sponsors-section">
            <div class="container">
               <div class="sponsors-outer">
                  <ul class="sponsors-carousel owl-carousel owl-theme">
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/1.png')}}" alt></a></figure>
                     </li>
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/2.png')}}" alt></a></figure>
                     </li>
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/3.png')}}" alt></a></figure>
                     </li>
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/4.png')}}" alt></a></figure>
                     </li>
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/5.png')}}" alt></a></figure>
                     </li>
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/1.png')}}" alt></a></figure>
                     </li>
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/2.png')}}" alt></a></figure>
                     </li>
                     <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="{{ asset('front/asset/images/clients/3.png')}}" alt></a></figure>
                     </li>
                  </ul>
               </div>
            </div>
         </section>
        
@endsection