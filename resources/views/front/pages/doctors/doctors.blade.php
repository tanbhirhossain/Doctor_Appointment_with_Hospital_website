@extends('front.layouts.medicoz_master')

@section('page-title', 'AMZ Hospital Ltd. | For amazing Care &#8211; Uttar Badda , Dhaka-1212')

@section('page-content')

<section class="page-title">
    <div class="outer-container">
       <div class="image">
          <img src="{{ asset('front/asset/images/background/19.jpg')}}" alt />
       </div>
    </div>
 </section>
 <section class="page-breadcrumb">
    <div class="image-layer" style="background-image:url({{ asset('front/asset/images/background/1.png')}})"></div>
    <div class="container">
       <div class="clearfix">
          <div class="pull-left">
             <h2>Meet Our Specialists</h2>
          </div>
          <div class="pull-right">
             <ul class="breadcrumbs">
                <li class="left-curves"></li>
                <li class="right-curves"></li>
                <li><a href="{{ url('/') }}">Home -</a></li>
                <li>Doctors</li>
             </ul>
          </div>
       </div>
    </div>
 </section>
 <section class="doctors-page-section">
    <div class="container">
       <div class="mixitup-gallery">
          <div class="filters text-center clearfix">
             <ul class="filter-tabs filter-btns clearfix">
                <li class="active filter" data-role="button" data-filter="all">All Departments</li>
                @foreach ($departments as $item)

                <li class="filter" data-role="button" data-filter=".mm{{ $item->id }}">{{ $item->name }}</li>

                @endforeach
              
             </ul>
          </div>
          <div class="filter-list row">
             {{-- <div class="team-block all mix traumatology dental pediatric col-lg-3 col-md-6 col-sm-12">
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
                      <h3><a href="#">Andrew Sebastian</a></h3>
                      <p class="designation">Dermatologist</p>
                   </div>
                </div>
             </div> --}}

             @foreach ($doctors as $item)

             <div class="team-block all mix mm{{ $item->department->id }} col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                   <div class="image">
                      <img src="{{ asset($item->image) }}" alt />
                      <div class="overlay-box">
                         <div class="overlay-inner">
                            <ul class="team-social-box">
                               <li class="youtube"><a href="https://www.youtube.com/@amzhospitalltd" class="icon icon-youtube"></a><span class="social-name">youtube</span></li>
                               <li class="linkedin"><a href="https://www.linkedin.com/company/amz-hospital-ltd/" class="icon icon-linkedin"></a><span class="social-name">linkedin</span></li>
                               <li class="facebook"><a href="https://www.facebook.com/amzhospitalltd" class="icon icon-facebook"></a><span class="social-name">facebook</span></li>
                               {{-- <li class="twitter"><a href="#" class="icon icon-twitter"></a><span class="social-name">twitter</span></li> --}}
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="lower-content">
                      <div class="icon-box">
                         <span class="icon icon-heart1"></span>
                      </div>
                      <h3><a href="{{ route('doctor.details', $item->slug) }}">{{ $item->name }}</a></h3>
                      <p class="designation">{{ $item->department->name }}</p>
                   </div>
                </div>
             </div>
            @endforeach
          </div>
       </div>
    </div>
 </section>
 <section class="price-section">
    <div class="pattern-layer-one" style="background-image:url({{ asset('front/asset/images/background/pattern-21.png')}})"></div>
    <div class="pattern-layer-two" style="background-image:url({{ asset('front/asset/images/background/pattern-20.png')}})"></div>
    <div class="container">
       <div class="section-title text-center">
          <h2>Flexible Pricing Plans</h2>
          <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarks grove right</p>
       </div>
       <div class="clearfix">
          <div class="price-block col-lg-3 col-md-6 col-sm-12">
             <div class="inner-box">
                <div class="upper-box">
                   <h3>Doctor Visits & <br> Urgent Care</h3>
                </div>
                <div class="middle-box">
                   <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="lower-box">
                   <div class="price">$15.00</div>
                   <div class="package-plan">Per Yearly</div>
                   <a href="#" class="theme-btn book-btn">Book now <span class="flaticon-right-arrow"></span></a>
                </div>
             </div>
          </div>
          <div class="price-block col-lg-3 col-md-6 col-sm-12">
             <div class="inner-box">
                <div class="upper-box">
                   <h3>Your Physician & <br> Specialists</h3>
                </div>
                <div class="middle-box">
                   <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="lower-box">
                   <div class="price">$25.00</div>
                   <div class="package-plan">Per Yearly</div>
                   <a href="#" class="theme-btn book-btn">Book now <span class="flaticon-right-arrow"></span></a>
                </div>
             </div>
          </div>
          <div class="price-block col-lg-3 col-md-6 col-sm-12">
             <div class="inner-box">
                <div class="upper-box">
                   <h3>Labs, X-Rays & <br> Screenings</h3>
                </div>
                <div class="middle-box">
                   <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="lower-box">
                   <div class="price">$35.00</div>
                   <div class="package-plan">Per Yearly</div>
                   <a href="#" class="theme-btn book-btn">Book now <span class="flaticon-right-arrow"></span></a>
                </div>
             </div>
          </div>
          <div class="price-block col-lg-3 col-md-6 col-sm-12">
             <div class="inner-box">
                <div class="upper-box">
                   <h3>Emergency Room <br> & Coverage</h3>
                </div>
                <div class="middle-box">
                   <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="lower-box">
                   <div class="price">$65.00</div>
                   <div class="package-plan">Per Yearly</div>
                   <a href="#" class="theme-btn book-btn">Book now <span class="flaticon-right-arrow"></span></a>
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
                  <div class="designation">NY Citizen</div>
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
                  <div class="designation">NY Citizen</div>
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
                  <div class="designation">NY Citizen</div>
               </div>
               <div class="image-box">
                  <img src="{{ asset('front/asset/images/resource/author-4.png')}}" alt />
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sponsors-section style-two">
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