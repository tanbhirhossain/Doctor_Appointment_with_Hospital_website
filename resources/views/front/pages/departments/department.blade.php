@extends('front.layouts.medicoz_master')

@section('page-title', 'AMZ Hospital Ltd. | For amazing Care &#8211; Uttar Badda , Dhaka-1212')

@section('page-content')

<section class="page-breadcrumb">

    <div class="image-layer" style="background-image:url({{ asset('front/asset/images/background/1.png')}})"></div>
    <div class="container">
       <div class="clearfix">
          <div class="pull-left">
             <h2>Center of Excellence</h2>
          </div>
          <div class="pull-right">
             <ul class="breadcrumbs">
                <li class="left-curves"></li>
                <li class="right-curves"></li>
                <li><a href="index-2.html">Home -</a></li>
                <li>Center of Excellence</li>
             </ul>
          </div>
       </div>
    </div>
 </section>
 <section class="services-section-two style-two">
    <div class="container">
       <div class="section-title text-center">
          <h2>Center of Excellence</h2>
          <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarks grove right</p>
       </div>
       <div class="row">
          {{-- <div class="services-block col-lg-6 col-md-12 col-sm-12">
             <div class="inner-box">
                <div class="content">
                   <div class="icon-box">
                      <span class="icon"><img src="{{ asset('front/asset/images/icons/icon-1.png')}}" alt /></span>
                   </div>
                   <h3><a href="#">Dental Hygiene</a></h3>
                   <p>Our exceptional and experienced staff is dedicated to improving our patients’ dental health and enhancing smiles.</p>
                </div>
             </div>
          </div>
          <div class="services-block col-lg-6 col-md-12 col-sm-12">
             <div class="inner-box">
                <div class="content">
                   <div class="icon-box">
                      <span class="icon"><img src="{{ asset('front/asset/images/icons/icon-2.png')}}" alt /></span>
                   </div>
                   <h3><a href="#">Tooth Fillings</a></h3>
                   <p>Our exceptional and experienced staff is dedicated to improving our patients’ dental health and enhancing smiles.</p>
                </div>
             </div>
          </div> --}}

          @foreach ($departments as $item)
          <div class="services-block col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
               <div class="content">
                  <div class="icon-box">
                     <span class="icon"><img style="height:110px; width:100px;   box-shadow: 2px 2px 2px grey; padding: 10px;
                        " src="{{ $item->icon }}" alt /></span>
                  </div>
                  <h3>
                     <a href="{{ route('front.departments.details', $item->slug) }}">{{ $item->name }}</a>
                  </h3>
                  <p>Our exceptional and experienced staff is dedicated to improving our patients’ dental health and enhancing smiles.</p>
               </div>
            </div>
         </div>
          @endforeach
          
       </div>
    </div>
 </section>
 <section class="video-section style-three" style="background-image:url({{ asset('front/asset/images/background/22.jpg')}})">
    <div class="container">
       <h2>We are pleased to offer you the chance to have the healthy</h2>
       <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-button" data-fancybox="gallery" data-caption><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple-2"></span></a>
       <span class="play-now">Play Video</span>
    </div>
 </section>


 <section class="testimonial-section style-two alternate">
    <div class="pattern-layer" style="background-image:url({{ asset('front/asset/images/background/pattern-14.png')}})"></div>
    <div class="pattern-layer-two" style="background-image:url({{ asset('front/asset/images/background/pattern-15.png')}})"></div>
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



@endsection