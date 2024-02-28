@extends('front.layouts.medicoz_master')
@section('page-title', 'AMZ Hospital Ltd. | For amazing Care &#8211; Uttar Badda , Dhaka-1212')
@section('css')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<!-- Bootstrap Datepicker CSS -->
<style>
   .booked {
   background-color: red; /* Or any other style you prefer */
   }
   .calender-block .inner-box .time-boxed .time_booked{
	position:relative;
	float:left;
	width:19%;
	font-size:14px;
	color:#222222;
	padding:9px 6px;
	text-align:center;
	font-weight:400;
	line-height:1.8em;
	margin-bottom:4px;
	z-index:1;
	margin-right:4px;
	background-color:#f0f0f0;
	-webkit-transition:all 600ms ease;
	-ms-transition:all 600ms ease;
	-o-transition:all 600ms ease;
	-moz-transition:all 600ms ease;
	transition:all 600ms ease;
}

.calender-block .inner-box .time-boxed .time_booked:hover{
	color:#ffffff;
	z-index:1;
}

.calender-block .inner-box .time-boxed .time_booked:before{
	position:absolute;
	content:'';
	left:0px;
	top:0px;
	width:0%;
	height:100%;
	z-index:-1;
	background-color:#1cba9f;
	-webkit-transition:all 600ms ease;
	-ms-transition:all 600ms ease;
	-o-transition:all 600ms ease;
	-moz-transition:all 600ms ease;
	transition:all 600ms ease;
}

.calender-block .inner-box .time-boxed .time_booked:hover::before{
	width:100%;
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
               {{-- 
               <h2>Education & Training</h2>
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
               </ul>
               --}}
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
@php
// /dd($availableDates);
@endphp
<section class="appointment-section style-two">
   <div class="pattern-layer" style="background-image:url(images/background/pattern-1.png)"></div>
   <div class="container">
      <div class="title-box">
         <h2>With access to 24 hour emergency assistance, you can continue to help others.</h2>
      </div>
      <div class="inner-section">
         <div class="row">
            <!-- <div class="col-lg-4 col-md-12 col-sm-12">
               <div class="form-column">
                  <div class="inner-column">
                     <h3>Fill up the form</h3>
                     <div class="calender-form">
                        <form method="post" action="https://html.xpeedstudio.com/medizco/contact.html">
                           <div class="form-group">
                              <label><span class="icon icon-doctor"></span> Purpose for Visit</label>
                              <select class="custom-select-box">
                                 <option>Select Visit Type</option>
                                 <option>Type One</option>
                                 <option>Type Two</option>
                                 <option>Type Three</option>
                                 <option>Type Four</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label><span class="icon flaticon-new-user"></span> Enter your Name</label>
                              <input type="text" name="username" placeholder="Type your name" required>
                           </div>
                           <div class="form-group">
                              <label><span class="icon icon-envelope"></span> Your Mail Address</label>
                              <input type="text" name="email" placeholder="Email" required>
                           </div>
                           <div class="form-group">
                              <label><span class="icon flaticon-phone-receiver"></span> Your Mail Address</label>
                              <input type="text" name="phone" placeholder="Phone" required>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               </div> -->
            <div class="col-lg-2"></div>
            <div class="col-lg-8 col-md-12 col-sm-12">
               <div class="calender-column">
                  <div class="inner-column">
                     <div class="calender-title">
                        <div class="title">Need emergency?</div>
                        <h3>Book an <span class="theme_color">Appointment</span></h3>
                        @if ($errors->any())
                        <div class="flex p-4 mt-2 mx-7 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                           <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                           </svg>
                           <span class="sr-only">Danger</span>
                           <div>
                              <span class="font-medium">Ensure that these requirements are met:</span>
                              <ul class="mt-1.5 list-disc list-inside">
                                 @foreach ($errors->all() as $error )
                                 <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                        @endif
                     </div>
                     <div class="calender-carousel owl-carousel owl-theme">
                        @foreach ($calendarBlocks as $block)
                        <div class="calender-block">
                           <div class="block-outer">
                              <div class="inner-box">
                                 <div class="days-boxed">
                                    <div class="clearfix">
                                       <div class="day-date"><strong>{{ $block['day'] }}</strong>{{ $block['date'] }}</div>
                                    </div>
                                 </div>
                                 <div class="time-boxed">
                                    <div class="clearfix">
                                       @foreach ($block['timeSlots'] as $timeSlot)
                                          @php
                                             // Construct the start time and end time for the current time slot
                                             $startTime = Carbon\Carbon::parse($block['date'].' '.$timeSlot);
                                             $endTime = $startTime->copy()->addMinutes(15); // Assuming each time slot is 15 minutes

                                             // Check if any appointment overlaps with the current time slot
                                             $booked = \App\Models\Appointment::where('doctor_id', $doctor->id)
                                                   ->where('start_time', '<', $endTime) // Check if appointment start time is before the time slot's end time
                                                   ->where('end_time', '>', $startTime) // Check if appointment end time is after the time slot's start time
                                                   ->exists(); // Check if any such appointment exists
                                          @endphp

                                          @if ($booked)
                                          <div class="time_booked" style="background-color: rgb(32, 170, 180);" data-time="{{ $timeSlot }}">{{ $timeSlot }}</div>  
                                          @else
                                          <div class="time" data-time="{{ $timeSlot }}">{{ $timeSlot }}</div>  
                             
                                          @endif

                                       @endforeach

                                    </div>
                                 </div>
                                 <div class="more-boxed">
                                    {{-- 
                                    <div class="clearfix">
                                       @for ($i = 0; $i < count($block['timeSlots']); $i++)
                                       <div class="more">more...</div>
                                       @endfor
                                    </div>
                                    --}}
                                 </div>
                              </div>
                              <div class="button-box">
                                 {{-- <a href="#" class="theme-btn btn-style-transparent"><span class="arrow icon-chevron-left"></span> Cancel</a>
                                 <a href="#" class="theme-btn btn-style-three">Book Now <span class="arrow icon-chevron-right"></span></a> --}}
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- Form Modal -->
<div id="appointmentModal" class="modal modal-xl">
   <div class="modal-content modal-dialog-scrollable" style="margin-bottom: 20px;">
      <span class="close">&times;</span>
      <h2 class="text-center">Appointment Details</h2>
      <hr>
      <div style="margin-left: 10%; margin-right: 10%; text-align: center;">
         <div style="text-align: center; margin-top: 30px;">
            <div class="row">
               <div class="col-xs-6 col-md-6 text-left">
                  <img style="height: 110px; border-radius: 50%;" src="{{ $doctor->image }}" alt="{{ $doctor->name }}" />
                  <h5>{{ $doctor->name }}</h5>
               </div>
               <div class="col-xs-6 col-md-6">
                  <p></p>
                  <p><input disabled type="text" id="selectedTime" name="selectedTime" value="16:00"></p>
                  <p><input disabled type="text" id="selectedPatientName" name="selectedPatientName" value=""></p>
                  <p><input disabled type="text" id="selectedPhone" name="selectedPhone" value=""></p>
                  <p><input disabled type="text" id="selectedRemarks" name="selectedRemarks" value=""></p>
                  <p><input disabled type="text" value="{{ $doctor->visit_fee }}"></p>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <form id="appointmentForm" action="{{ route('front.booking.store') }}" method="POST" style="margin-top: 30px; margin-left: 10%; margin-right: 10%; margin-bottom: 10%">
         @csrf
         <div class="form-group">
            <input readonly class="form-control" type="text" id="selectedDate" name="selectedDate" >
         </div>
         <div class="form-group">
            <input readonly class="form-control" type="text" name="doctor_name" value="{{ $doctor->name }}" >
            <input readonly class="form-control" type="hidden" name="doctor_id" value="{{ $doctor->id }}" >
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name">
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone">
         </div>
         <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
         </div>
         <div class="form-group">
            <textarea class="form-control" name="remarks" placeholder="Remarks"></textarea>
         </div>
         <button class="btn btn-danger btn-block" type="submit">Submit</button>
      </form>
   </div>
</div>
@endsection
@section('js')
@include('sweetalert::alert')
<script>
   // Get the modal
   var modal = document.getElementById("appointmentModal");
   
   // Get all time slots
   var timeSlots = document.querySelectorAll(".time");
   
   // Loop through each time slot and attach click event
   timeSlots.forEach(function(slot) {
       slot.addEventListener("click", function() {
           // Open the modal
           modal.style.display = "block";
           // Pass the selected time slot to the form
           var selectedDateTime = slot.closest(".calender-block").querySelector(".day-date").innerText + " " + slot.getAttribute("data-time");
           document.getElementById("selectedDate").value = formatDate(selectedDateTime);
   
           document.getElementById("selectedTime").value = slot.getAttribute("data-time");
   
           document.getElementById("selectedPhone").value = slot.getAttribute("phone");
       });
   });
   
   // Function to format date and time
   function formatDate(dateTime) {
       var date = new Date(dateTime);
       var formattedDate = ("0" + date.getDate()).slice(-2) + "-" + ("0" + (date.getMonth() + 1)).slice(-2) + "-" + date.getFullYear();
       var hours = ("0" + date.getHours()).slice(-2);
       var minutes = ("0" + date.getMinutes()).slice(-2);
       var formattedTime = hours + ":" + minutes;
       return formattedDate + " " + formattedTime;
   }
   
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];
   
   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
       modal.style.display = "none";
   }
   
   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
       if (event.target == modal) {
           modal.style.display = "none";
       }
   }
   
   // Submit form
   // document.getElementById("appointmentForm").addEventListener("submit", function(event) {
   //     event.preventDefault();
   //     // Here you can handle form submission, e.g., AJAX request
   //     // After form submission, you can show the final step for review
   //     alert("Form submitted successfully!");
   //     // Reset form
   //     document.getElementById("appointmentForm").reset();
   //     // Close modal
   //     modal.style.display = "none";
   // });
   
   // Live display of input text
   var nameInput = document.querySelector('input[name="name"]');
   var phoneInput = document.querySelector('input[name="phone"]');
   var remarksInput = document.querySelector('textarea[name="remarks"]');
   var selectedPatientName = document.getElementById("selectedPatientName");
   var selectedPhone = document.getElementById("selectedPhone");
   var selectedRemarks = document.getElementById("selectedRemarks");
   
   nameInput.addEventListener('input', function() {
       selectedPatientName.value = this.value;
   });
   
   phoneInput.addEventListener('input', function() {
       selectedPhone.value = this.value;
   });
   
   remarksInput.addEventListener('input', function() {
       selectedRemarks.value = this.value;
   });
</script>
@endsection