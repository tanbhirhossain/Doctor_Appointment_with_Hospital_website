@extends('front.layouts.medicoz_master')

@section('page-title', 'AMZ Hospital Ltd. | For amazing Care &#8211; Uttar Badda , Dhaka-1212')
@section('css')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<style>
   .dr_schedule{
      background: rgb(59,97,82);
      background: linear-gradient(63deg, rgba(59,97,82,1) 0%, rgba(13,132,152,1) 11%, rgba(15,173,111,1) 100%);
      color: white;
      padding-top: 25px;
      padding-bottom: 25px;
      box-shadow: 5px 5px 5px gray;
   }

   .dr_schedule tr{
      text-align: center;
      font-size: 25px;

   }

   .dr_timetable{

   }

@media only screen and (max-width: 767px) {
   .dr_schedule .dr_timetable{
    margin:0 auto;
   }
}
</style>
@endsection
@section('page-content')

<section class="page-title">
    <div class="outer-container">
       <div class="image">
          <img src="{{ asset('front/asset/images/background/20.jpg')}}" alt />
       </div>
    </div>
 </section>
 <section class="page-breadcrumb">
    <div class="image-layer" style="background-image:url({{ asset('front/asset/images/background/1.png')}})"></div>
    <div class="container">
       <div class="clearfix">
          <div class="pull-left">
             <h2>{{ $doctor->name }}</h2>
          </div>
          <div class="pull-right">
             <ul class="breadcrumbs">
                <li class="left-curves"></li>
                <li class="right-curves"></li>
                <li><a href="{{ url('/') }}">Home -</a></li>
                <li><a href="{{ url('/doctors') }}">Doctors -</a></li>
                <li>{{ Str::limit($doctor->name, 30) }}</li>
             </ul>
          </div>
       </div>
    </div>
 </section>
 <section class="doctor-detail-section">
    <div class="container">
       <div class="row">
          <div class="image-column col-lg-5 col-md-12 col-sm-12">
             <div class="inner-column">
                <div class="image">
                   <img src="{{ $doctor->image }}" alt />
                   <div class="number-box">
                      <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-button" data-fancybox data-caption><i class="ripple"></i><i class="icon flaticon-phone"></i></a>
                      10699
                   </div>
                </div>
             </div>
          </div>
          <div class="content-column col-lg-7 col-md-12 col-sm-12">
             <div class="inner-column">
                <h2>Personal Details</h2>
                <ul class="doctor-info-list">
                   <li><span>Doctor Name</span>{{ $doctor->name }}</li>
                   <li><span>Primary Speciality</span>{{ $doctor->speciality }}</li>
                   <li><span>Qualification</span>{{ $doctor->qualification }}</li>
                   <li><span>Designation</span>{{ $doctor->designation }}</li>
                   <li><span>Institue</span>{{ $doctor->institute }}</li>
                </ul>
                {{-- <h2>Education & Training</h2>
                <ul class="doctor-info-list">
                   <li><span>Medical Education</span>University of California, San Francisco</li>
                   <li><span>Residency</span>San Francisco</li>
                   <li><span>Practice Areas</span>Stereotactic Radiosurgery, Glioma</li>
                   <li><span>Certifications</span>American Board of Neurological Surgery </li>
                </ul>
                <h2>Social Media</h2>
                <ul class="social-box">
                   <li class="facebook"><a href="#"><span class="icon icon icon-facebook"></span></a></li>
                   <li class="twitter"><a href="#"><span class="icon icon icon-twitter"></span></a></li>
                   <li class="linkedin"><a href="#"><span class="icon icon icon-linkedin"></span></a></li>
                   <li class="youtube"><a href="#"><span class="icon icon icon-youtube"></span></a></li>
                </ul> --}}
             </div>
          </div>
       </div>
    </div>
 </section>
 @if($doctor->biography != Null)
 <div class="biography-section">
    <div class="pattern-one" style="background-image: url({{ asset('front/asset/images/icons/pattern-icon-10.png')}});"></div>
    <div class="container">
       <div class="row">
          <div class="title-column col-lg-4 col-md-12 col-sm-12">
             <h2>biography</h2>
          </div>
          <div class="content-column col-lg-8 col-md-12 col-sm-12">
             <div class="inner-column">
                <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted</p>
                <p>almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                <div class="signature">
                   <img src="{{ asset('front/asset/images/icons/signature.png')}}" alt />
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @endif


 <section class="dr_schedule">
    <div style="" class="pattern-layer" style="background-image:url({{ asset('front/asset/images/background/pattern-10.png')}})"></div>
    <div class="pattern-layer-two" style="background-image:url({{ asset('front/asset/images/background/pattern-11.png')}})"></div>
    <div class="container">
       <div class="row">
          <div class="skills-column col-lg-12 col-md-12 col-sm-12">
             <div class="inner-column" style="">
               <table style="font-size:20px;" class="dr_timetable table table-bordered">
                  <thead>
                     <tr>
                        <th style="text-align:center; font-size:30px;" colspan="3">Doctor Time Schedule</th>
                     </tr>
                     <tr>
                        <th>Day</th>
                        <th>Start Time</th>
                        <th>End time</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($doctor->timetable as $item)
                         <tr>
                           <td>{{ $dayMappings[$item->day] ?? $item->day}}</td>
                           <td>{{ $item->start_time ? date('h:i A', strtotime($item->start_time)) : "-" }}</td>
                           <td>{{ $item->end_time ? date('h:i A', strtotime($item->start_time)) : "-" }}</td>
                         </tr>
                     @endforeach
                  </tbody>
               </table>
                
             </div>
          </div>
         
       </div>
    </div>
 </section>

 <section  class="">
   <div class="container" style="margin-top:30px;">
      <div class="table-responsive">
          <table class="table table-striped">
            <thead>
               <tr>
                  <th>Sat</th>
                  <th>Sun</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thu</th>
                  <th>Fri</th>
               </tr>
              
            </thead>

         <tbody>
            <tr>
               <th class="bg-info text-white">03 Feb</th>
               <th class="bg-info text-white">04 Feb</th>
               <th class="bg-info text-white">05 Feb</th>
               <th class="bg-info text-white">06 Feb</th>
               <th class="bg-info text-white">07 Feb</th>
               <th class="bg-info text-white">08 Feb</th>
               <th class="bg-info text-white">09 Feb</th>
            </tr>
            <tr>
               <td><a class="btn btn-warning" href="">05:00PM</a></td>
               <td><a class="btn btn-warning" href="">05:15PM</a></td>
               <td><a class="btn btn-warning" href="">05:30PM</a></td>
               <td><a class="btn btn-warning" href="">05:45PM</a></td>
               <td><a class="btn btn-warning" href="">06:00PM</a></td>
               <td><a class="btn btn-warning" href="">06:15PM</a></td>
               <td><a class="btn btn-warning" href="">06:30PM</a></td>  
            </tr>
            <tr>
               <td><a class="btn btn-success" href="">05:00PM</a></td>
               <td><a class="btn btn-success" href="">05:15PM</a></td>
               <td><a class="btn btn-success" href="">05:30PM</a></td>
               <td><a class="btn btn-success" href="">05:45PM</a></td>
               <td><a class="btn btn-success" href="">06:00PM</a></td>
               <td><a class="btn btn-success" href="">06:15PM</a></td>
               <td><a class="btn btn-success" href="">06:30PM</a></td>  
            </tr>
            <tr>
               <td><a class="btn btn-danger" href="">05:00PM</a></td>
               <td><a class="btn btn-danger" href="">05:15PM</a></td>
               <td><a class="btn btn-danger" href="">05:30PM</a></td>
               <td><a class="btn btn-danger" href="">05:45PM</a></td>
               <td><a class="btn btn-danger" href="">06:00PM</a></td>
               <td><a class="btn btn-danger" href="">06:15PM</a></td>
               <td><a class="btn btn-danger" href="">06:30PM</a></td>  
            </tr>
            
         </tbody>
        
      </table>
      </div>
   </div>
</section>
@endsection