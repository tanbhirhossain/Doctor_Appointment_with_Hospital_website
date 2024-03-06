@extends('front.layouts.medicoz_master')

@section('page-title', 'AMZ Hospital Ltd. | For amazing Care &#8211; Uttar Badda , Dhaka-1212')

@section('page-content')

<section class="page-breadcrumb">
    <div class="image-layer" style="background-image:url({{ asset('front/asset/images/background/1.png')}})"></div>
    <div class="container">
       <div class="clearfix">
          <div class="pull-left">
             <h2>{{ $department->name }}</h2>
          </div>
          <div class="pull-right">
             <ul class="breadcrumbs">
                <li class="left-curves"></li>
                <li class="right-curves"></li>
                <li><a href="{{ route('front.home') }}">Home -</a></li>
                <li>Department</li>
             </ul>
          </div>
       </div>
    </div>
 </section>
 <section class="services-single-section">
    <div class="container">
       <div class="row">
          <div class="widgets-column col-lg-3 col-md-12 col-sm-12">
             <div class="inner-column">
                <div class="services-widget category-widget">
                   <ul class="cat-list">
                      <li class="active"><a href="services-detail.html">Trauma & intensive care</a></li>
                      <li><a href="community.html">Community Services</a></li>
                      <li><a href="diagnosis.html">Diagnosis & Investigation</a></li>
                      <li><a href="surgical.html">Medical & Surgical</a></li>
                      <li><a href="specialised.html">Specialised Support Service</a></li>
                      <li><a href="rehabitation.html">Health Rehabitation</a></li>
                      <li><a href="community.html">Community Services</a></li>
                      <li><a href="diagnosis.html">Diagnosis & Investigation</a></li>
                      <li><a href="surgical.html">Medical & Surgical</a></li>
                      <li><a href="specialised.html">Specialised Support Service</a></li>
                      <li><a href="rehabitation.html">Health Rehabitation</a></li>
                      <li><a href="community.html">Community Services</a></li>
                      <li><a href="diagnosis.html">Diagnosis & Investigation</a></li>
                      <li><a href="surgical.html">Medical & Surgical</a></li>
                      <li><a href="specialised.html">Specialised Support Service</a></li>
                      <li><a href="rehabitation.html">Health Rehabitation</a></li>
                      <li><a href="community.html">Community Services</a></li>
                      <li><a href="diagnosis.html">Diagnosis & Investigation</a></li>
                      <li><a href="surgical.html">Medical & Surgical</a></li>
                      <li><a href="specialised.html">Specialised Support Service</a></li>
                      <li><a href="rehabitation.html">Health Rehabitation</a></li>
                      @foreach ($dept_list as $item)
                      <li><a href="{{ route('front.departments.details', $item->slug) }}">{{ $item->name }}</a></li>

                      @endforeach
                   </ul>
                </div>
                <div class="services-widget schedule-widget">
                   <div class="image">
                      <img src="{{ asset('front/asset/images/resource/service-10.jpg')}}" alt />
                      <div class="overlay-box">
                         <div class="content">
                            <span class="icon flaticon-calendar-2"></span>
                            <h3>Doctor <br> Schedule</h3>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="content-column col-lg-9 col-md-12 col-sm-12">
             <div class="inner-column">
                <div class="services-carousel">
                   <div class="image-column">
                      <div class="carousel-outer">
                         <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                            <li><a href="{{ asset('front/asset/images/resource/service-11.jpg')}}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('front/asset/images/resource/service-11.jpg')}}" alt></a></li>
                         </ul>
                         <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-1.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-2.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-3.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-4.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-5.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-1.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-2.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-3.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-4.jpg')}}" alt></li>
                            <li><img src="{{ asset('front/asset/images/resource/service-thumb-5.jpg')}}" alt></li>
                         </ul>
                      </div>
                   </div>
                </div>
               {!! $department->description !!}
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection