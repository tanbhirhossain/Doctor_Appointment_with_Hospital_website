@extends('front.layouts.medicoz_master')

@section('page-title', 'AMZ Hospital Ltd. | For amazing Care &#8211; Uttar Badda , Dhaka-1212')
@section('css')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
 <!-- Bootstrap Datepicker CSS -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
 <!-- Custom CSS -->
  <!-- Bootstrap Datepicker CSS -->

  <!-- Custom CSS -->
  <style>
    .step {
      display: none;
    }
    .step.active {
      display: block;
    }
    .time-slot-btn {
      margin-right: 10px;
      margin-bottom: 10px;
    }
    .available {
    background-color: green;
    color: white;
   }

  </style>
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
.booking_form{
   margin-top:40px;
   margin-bottom: 40px;
   width: 800px;
   
   border: 1px solid red;
}

.booking_form .sidebar{

}

.book-info{
   background: rgb(223, 223, 223);
}

#datepickerContainer{
   font-size: 15px;
}

.datepicker-days td{
   padding-left: 15px;
   padding-right: 15px;
   padding-top: 10px;
   padding-bottom: 10px;
   border: 1px solid grey;
   margin: 5px;

}
.available {
    background-color: #c1e1c5; /* Light green background color */
    color: #000000; /* Black text color */
}


.datepicker-days td:hover{
   background-color: blue;
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
@php
   // /dd($availableDates);
@endphp
 <section  class="">
   <div  class="booking_form container">
      <div class="row justify-content-center">
         <div class="sidebar col-lg-4 col-sm-4 bg-info">

         </div>
        <div class="book-info col-lg-8 col-sm-8">
         <form id="multiStepForm" method="POST" action="">
            <!-- Step 1 -->
            <div class="step active" id="step1">
              <h2 class="mb-4">Step 1: Select Date</h2>
              <div id="datepickerContainer" class="text-center mb-4"></div>
              <div class="text-center">
                <button class="btn btn-primary next">Next</button>
              </div>
            </div>
  
            <!-- Step 2 -->
            <div class="step" id="step2">
              <h2 class="mb-4">Step 2: Select Time Slot</h2>
              <div id="timeSlotsContainer" class="text-center mb-4"></div>
              <div class="text-center">
                <button class="btn btn-primary prev mr-2">Previous</button>
                <button class="btn btn-primary next">Next</button>
              </div>
            </div>
  
            <!-- Step 3 -->
            <div class="step" id="step3">
              <h2 class="mb-4">Step 3: Enter Patient Details</h2>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="mobile">Mobile No:</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
              </div>
              <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="text-center">
                <button class="btn btn-primary prev mr-2">Previous</button>
                <button class="btn btn-primary next">Next</button>
              </div>
            </div>
  
            <!-- Final Step -->
            <div class="step" id="finalStep">
              <h2 class="mb-4">Final Step: Review Information</h2>
              <div id="selectedInfo"></div>
              <div class="text-center">
                <button class="btn btn-primary prev mr-2">Previous</button>
                <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
   </div>
  
</section>
@endsection

@section('js')
     <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <!-- Add this before the script that uses moment -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

  <!-- Custom JS -->
  <script>
$(document).ready(function() {

    // Static data for testing (replace with PHP-generated data)
    var availableDates = ["2024-02-23", "2024-02-26", "2024-02-21"];

    // Function to check if a date is available
    function isAvailable(date) {
        var dateString = moment(date).format('YYYY-MM-DD');
        return availableDates.includes(dateString);
    }

    // Step 1: Datepicker
// Step 1: Datepicker
$('#datepickerContainer').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    endDate: '+7d',
    beforeShowDay: function(date) {
        var dateString = moment(date).format('YYYY-MM-DD');
        var isAvailableDay = isAvailable(date);
        console.log(dateString, isAvailableDay); // Debugging statement
        return [true, isAvailableDay ? 'available' : ''];
    }
});

  // Function to generate time slots
  function generateTimeSlots() {
    var startDate = new Date($('#datepickerContainer').datepicker('getDate').setHours(8, 0, 0)); // Start time: 8:00 AM
    var endDate = new Date($('#datepickerContainer').datepicker('getDate').setHours(17, 0, 0));   // End time: 5:00 PM
    var timeSlots = [];
    while (startDate < endDate) {
      timeSlots.push(startDate.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}));
      startDate.setTime(startDate.getTime() + (15 * 60 * 1000)); // Add 15 minutes
    }
    var timeSlotsContainer = $('#timeSlotsContainer');
    timeSlotsContainer.empty();
    $.each(timeSlots, function(key, value) {
      timeSlotsContainer.append('<button type="button" class="btn btn-outline-primary time-slot-btn">' + value + '</button>');
    });
  }

  var currentStep = 1;

  $('.next').click(function(e) {
    e.preventDefault(); // Prevent form submission
    $('#step' + currentStep).removeClass('active');
    currentStep++;
    $('#step' + currentStep).addClass('active');
    if (currentStep === 2) {
      generateTimeSlots();
    }
  });

  $('.prev').click(function() {
    $('#step' + currentStep).removeClass('active');
    currentStep--;
    $('#step' + currentStep).addClass('active');
    console.log('Previous clicked, current step:', currentStep);
    // Update selected information in the final step when going back
    updateFinalStepInfo();
  });

  // Update selected information in the final step
  $('#multiStepForm').submit(function(e) {
    e.preventDefault();
    console.log('Form submitted');
    $('#finalStep').addClass('active');
    updateFinalStepInfo();
  });

  // Function to update selected information in the final step
  function updateFinalStepInfo() {
    var selectedDate = $('#datepickerContainer').datepicker('getDate').toLocaleDateString();
    var selectedTime = $('#timeSlotsContainer button.active').text();
    var selectedName = $('#name').val();
    var selectedMobile = $('#mobile').val();
    var selectedGender = $('#gender').val();

    var selectedInfo = '<p><strong>Date:</strong> ' + selectedDate + '</p>';
    selectedInfo += '<p><strong>Time Slot:</strong> ' + selectedTime + '</p>';
    selectedInfo += '<p><strong>Name:</strong> ' + selectedName + '</p>';
    selectedInfo += '<p><strong>Mobile No:</strong> ' + selectedMobile + '</p>';
    selectedInfo += '<p><strong>Gender:</strong> ' + selectedGender + '</p>';

    $('#selectedInfo').html(selectedInfo);
  }
});

 </script>
 
@endsection