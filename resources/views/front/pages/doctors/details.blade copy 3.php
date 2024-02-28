@php
    $dayMappings = [
        'sun' => 'Sunday',
        'mon' => 'Monday',
        'tue' => 'Tuesday',
        'wed' => 'Wednesday',
        'thu' => 'Thursday',
        'fri' => 'Friday',
        'sat' => 'Saturday',
    ];
@endphp


@extends('front.layouts.template_dr_details')

@section('css')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<style>
   .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .review-section {
            background-color: #f2f2f2;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            width: 100%;
        }

        .review-label {
            font-weight: bold;
        }

        .review-value {
            margin-left: 10px;
        }

        .btn-primary,
        .btn-secondary,
        .btn-success {
            margin-top: 10px;
        }
</style>
  <!-- Include the stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuejs-datepicker@1.6.2/dist/vuejs-datepicker.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue2-timepicker@1.1.6/dist/VueTimepicker.css">

  <!-- Include the scripts -->
  <script src="https://cdn.jsdelivr.net/npm/vue@3"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuejs-datepicker@1.6.2"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue2-timepicker@1.1.6"></script>

@endsection

@section('page-content')

<div class="page_banner">
  <div class="page_banner_img">
     <img src="{{ asset('front/wp/wp-content/themes/medizco/assets/images/banner/page-banner-img.jpg') }}" width="1920" height="400" class="w-100" alt="Asst. Prof. Md. Motashimul Hasan Shiplu <br> <h6 class="page_banner_title_h6"> MBBS , MS (NEUROSURGERY) , FELLOW </h6>" >    
  </div>
  <div class="page_banner_content  overlay" style="background-image: url({{ asset('front/wp/wp-content/themes/medizco/assets/images/banner/page-banner-bg.png') }});; --banner-overlay-color: rgba(193,5,5,0.76); --banner-breadcumb-color: #dd3333">
     <div class="container d-lg-flex justify-content-between">
        <h1 class="page_banner_title">
           {{ $doctor->name }} <br> 
           <h6 class="page_banner_title_h6"> {{ $doctor->qualification }} </h6>
        </h1>
        <ul class="medizco_breadcrumblist d-inline-flex flex-wrap flex-lg-nowrap align-items-center">
           <li class="curves left"></li>
           <li class="curves right"></li>
           <li><a href="{{ url('/') }}">Home</a></li>
           <li class="seperator">-</li>
           <li>Doctor</li>
           <li class="seperator">-</li>
           <li>
              {{ $doctor->name }} <br> 
              <h6 class="page_banner_title_h6"> {{ $doctor->qualification }} </h6>
           </li>
        </ul>
     </div>
  </div>
</div>

<!-- .medizco_banner -->
<div id="main-content" class="main-container blog-single"  role="main">
  <div class="container">
     <div class="row">
        <div class="col-lg-12">
           <article id="post-7567" class="post-content post-single post-7567 medizco-doctor type-medizco-doctor status-publish has-post-thumbnail hentry medizco-departments-all-departments medizco-departments-neuro-surgery">
              <div class="post-media post-image">
                 <img width="350" height="300" src="{{ asset($doctor->image) }}" class="img-fluid" alt="Asst. Prof. Md. Motashimul Hasan Shiplu &lt;br&gt; &lt;h6 class=&quot;page_banner_title_h6&quot;&gt; MBBS , MS (NEUROSURGERY) , FELLOW &lt;/h6&gt;" decoding="async" loading="lazy" srcset="https://amzhospitalbd.com/wp-content/uploads/2023/02/Dr._Md._Motashimul_Hasan__Shiplu_-removebg-preview__1_-removebg-preview.png 350w, https://amzhospitalbd.com/wp-content/uploads/2023/02/Dr._Md._Motashimul_Hasan__Shiplu_-removebg-preview__1_-removebg-preview-300x257.png 300w, https://amzhospitalbd.com/wp-content/uploads/2023/02/Dr._Md._Motashimul_Hasan__Shiplu_-removebg-preview__1_-removebg-preview-200x171.png 200w" sizes="(max-width: 350px) 100vw, 350px" />                     
              </div>
              <div class="post-body clearfix">
                 <!-- Article header -->
                 <header class="entry-header clearfix">
                    <div class="post-meta">
                       <span class="post-author"><i class="fa fa-user"></i> <a href="{{ asset('front/wp/author/tanbhirit/index.html') }}">Tanbhir Hossain</a></span> <span class="post-comment"><i class="fa fa-comment"></i><a href="#" class="comments-link"></a>0</span>	
                    </div>
                 </header>
                 <!-- header end -->
                 <!-- Article content -->
                 <div class="entry-content clearfix">
                    <div data-elementor-type="wp-post" data-elementor-id="7567" class="elementor elementor-7567">
                       <div class="elementor-inner">
                          <div class="elementor-section-wrap">
                             <section class="elementor-section elementor-top-section elementor-element elementor-element-49d9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="49d9" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                <div class="elementor-container elementor-column-gap-default">
                                   <div class="elementor-row">
                                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47a1" data-id="47a1" data-element_type="column">
                                         <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                               <div class="elementor-element elementor-element-3408 medizco_doctor_featured_img elementor-widget elementor-widget-image" data-id="3408" data-element_type="widget" data-widget_type="image.default">
                                                  <div class="elementor-widget-container">
                                                     <div class="elementor-image">
                                                        <figure class="wp-caption">
                                                           <a href="#book">
                                                           <img decoding="async" width="350" height="300" src="{{ asset($doctor->image) }}" class="attachment-medium_large size-medium_large wp-image-11244" alt="" srcset="{{ asset($doctor->image) }}" sizes="(max-width: 350px) 100vw, 350px" />								</a>
                                                           <figcaption class="widget-image-caption wp-caption-text">Get Appointment</figcaption>
                                                        </figure>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7c20 elementor-hidden-tablet elementor-hidden-mobile" data-id="7c20" data-element_type="column">
                                         <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                               <div class="elementor-element elementor-element-15c826b elementor-widget elementor-widget-medizco-doctor-info" data-id="15c826b" data-element_type="widget" data-widget_type="medizco-doctor-info.default">
                                                  <div class="elementor-widget-container">
                                                     <div class="medizco-doctor-info">
                                                        <table>
                                                           <tbody>
                                                              <tr>
                                                                 <th colspan="2" class="heading" style="padding-top: 0px; padding-bottom: 14px;">Personal Details</th>
                                                              </tr>
                                                              <tr>
                                                                 <th>Doctor Name</th>
                                                                 <td>{{ $doctor->name }}</td>
                                                              </tr>
                                                              <tr>
                                                                 <th>Primary Specialty</th>
                                                                 <td>{{ $doctor->department->name }}</td>
                                                              </tr>
                                                              <tr>
                                                                 <th>Qualification</th>
                                                                 <td>{{ $doctor->qualification }} </td>
                                                              </tr>
                                                              <tr>
                                                                 <th>Designation</th>
                                                                 <td>{{ $doctor->designation }}</td>
                                                              </tr>
                                                              <tr>
                                                                 <th>Institute</th>
                                                                 <td>{{ $doctor->institute }}</td>
                                                              </tr>
                                                           </tbody>
                                                        </table>
                                                     </div>
                                                  </div>
                                               </div>
                                               <div class="elementor-element elementor-element-5acbd95 elementor-absolute elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5acbd95" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                  <div class="elementor-widget-container">
                                                     <div class="elementor-divider">
                                                        {{-- <span class="elementor-divider-separator">
                                                        </span> --}}
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </section>
                             <section class="elementor-section elementor-top-section elementor-element elementor-element-53101df elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="53101df" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                <div class="elementor-container elementor-column-gap-default">
                                   <div class="elementor-row">
                                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36762e7 elementor-hidden-desktop" data-id="36762e7" data-element_type="column">
                                         <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                               <div class="elementor-element elementor-element-1df4fd9 elementor-widget elementor-widget-medizco-doctor-info" data-id="1df4fd9" data-element_type="widget" data-widget_type="medizco-doctor-info.default">
                                                  <div class="elementor-widget-container">
                                                     <div class="medizco-doctor-info">
                                                        <table>
                                                           <tbody>
                                                              <tr>
                                                                 <th>Doctor Name</th>
                                                                 <td>{{ $doctor->name }} </td>
                                                              </tr>
                                                             
                                                              <tr>
                                                                 <th>Primary Specialty</th>
                                                                 <td>{{ $doctor->department->name }}</td>
                                                              </tr>
                                                              <tr>
                                                                 <th>Qualification</th>
                                                                 <td>{{ $doctor->qualification }} </td>
                                                              </tr>
                                                            
                                                              <tr>
                                                                 <th>Designation</th>
                                                                 <td>{{ $doctor->designation }}</td>
                                                              </tr>
                                                              <tr>
                                                                 <th>Institute</th>
                                                                 <td>{{ $doctor->institute }}</td>
                                                              </tr>
                                                           </tbody>
                                                        </table>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </section>
                             <section class="elementor-section elementor-top-section elementor-element elementor-element-19345069 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="19345069" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                <div class="elementor-container elementor-column-gap-default">
                                   <div class="elementor-row">
                                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2549f1bd" data-id="2549f1bd" data-element_type="column">
                                         <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                               <section class="elementor-section elementor-inner-section elementor-element elementor-element-16ab3a51 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16ab3a51" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                  <div class="elementor-container elementor-column-gap-default">
                                                     <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-351a198e" data-id="351a198e" data-element_type="column">
                                                           <div class="elementor-column-wrap elementor-element-populated">
                                                              <div class="elementor-widget-wrap">
                                                                 <div class="elementor-element elementor-element-4b0d81fd biography_title elementor-widget__width-auto elementor-widget elementor-widget-elementskit-heading" data-id="4b0d81fd" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                       <div class="ekit-wid-con" >
                                                                          <div class="ekit-heading elementskit-section-title-wraper    ekit_heading_tablet-   ekit_heading_mobile-">
                                                                            @if ($doctor->biography)
                                                                            <h2 class="ekit-heading--title elementskit-section-title ">Biography </h2>

                                                                            @endif
                                                                          </div>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-61f324e9" data-id="61f324e9" data-element_type="column">
                                                           <div class="elementor-column-wrap elementor-element-populated">
                                                              <div class="elementor-widget-wrap">
                                                                 <div class="elementor-element elementor-element-133e43a0 elementor-widget elementor-widget-text-editor" data-id="133e43a0" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                       <div class="elementor-text-editor elementor-clearfix">
                                                                          <p><span style="font-weight: 400;">{!! $doctor->biography !!}</span></p>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                                 <div class="elementor-element elementor-element-1a8c844c elementor-absolute elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="1a8c844c" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                                    <div class="elementor-widget-container">
                                                                       <div class="elementor-divider">
                                                                          <span class="elementor-divider-separator">
                                                                          </span>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </section>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </section>
                             <section class="elementor-section elementor-top-section elementor-element elementor-element-1b50361 animated-slow elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="1b50361" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;background_motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_translateX_effect&quot;:&quot;yes&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;background_motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;background_motion_fx_translateX_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;background_motion_fx_translateX_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;_ha_eqh_enable&quot;:false}">
                                <div class="elementor-background-overlay"></div>
                                <div class="elementor-container elementor-column-gap-default">
                                   <div class="elementor-row">
                                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a8fdb4" data-id="5a8fdb4" data-element_type="column">
                                         <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                               <div class="elementor-element elementor-element-2060eac elementor-widget elementor-widget-heading" data-id="2060eac" data-element_type="widget" data-widget_type="heading.default">
                                                  <div class="elementor-widget-container">
                                                     <h2 class="elementor-heading-title elementor-size-default">Doctor Schedule</h2>
                                                  </div>
                                               </div>
                                               <section class="elementor-section elementor-inner-section elementor-element elementor-element-42fb107 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="42fb107" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                  <div class="elementor-container elementor-column-gap-default">
                                                     <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a5b3e98" data-id="a5b3e98" data-element_type="column">
                                                           <div class="elementor-column-wrap elementor-element-populated">
                                                              <div class="elementor-widget-wrap">
                                                                 <div class="elementor-element elementor-element-5e0b557 elementor-widget elementor-widget-heading" data-id="5e0b557" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                       <h2 class="elementor-heading-title elementor-size-default">Day</h2>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-61795b3" data-id="61795b3" data-element_type="column">
                                                           <div class="elementor-column-wrap elementor-element-populated">
                                                              <div class="elementor-widget-wrap">
                                                                 <div class="elementor-element elementor-element-34f6861 elementor-widget elementor-widget-heading" data-id="34f6861" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                       <h2 class="elementor-heading-title elementor-size-default">Time</h2>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </section>

                                               
                                               @foreach ($doctor->timetable as $item)
                                               <section class="elementor-section elementor-inner-section elementor-element elementor-element-30a650c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="30a650c" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                  <div class="elementor-container elementor-column-gap-default">

                                                        
                                                   
                                                     <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3eea107" data-id="3eea107" data-element_type="column">
                                                           <div class="elementor-column-wrap elementor-element-populated">
                                                              <div class="elementor-widget-wrap">
                                                                 <div class="elementor-element elementor-element-c28c439 elementor-widget elementor-widget-heading" data-id="c28c439" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                      <h2 class="elementor-heading-title elementor-size-default">{{ $dayMappings[$item->day] ?? $item->day }}</h2>                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9bfb1ec" data-id="9bfb1ec" data-element_type="column">
                                                           <div class="elementor-column-wrap elementor-element-populated">
                                                              <div class="elementor-widget-wrap">
                                                                 <div class="elementor-element elementor-element-b85197c elementor-widget elementor-widget-heading" data-id="b85197c" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                       <h2 class="elementor-heading-title elementor-size-default">{{ $item->start_time ? date('h:i A', strtotime($item->start_time)) : "-" }}
                                                                      </h2>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-758ac2a" data-id="758ac2a" data-element_type="column">
                                                           <div class="elementor-column-wrap elementor-element-populated">
                                                              <div class="elementor-widget-wrap">
                                                                 <div class="elementor-element elementor-element-df4bb02 elementor-widget elementor-widget-heading" data-id="df4bb02" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                       <h2 class="elementor-heading-title elementor-size-default">{{ $item->end_time ? date('h:i A', strtotime($item->start_time)) : "-" }}
                                                                      </h2>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>

                                                  </div>
                                               </section>
                                               @endforeach

                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </section>
                             <section class="elementor-section elementor-top-section elementor-element elementor-element-0c61b2f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0c61b2f" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                <div class="elementor-container elementor-column-gap-default">
                                   <div class="elementor-row">
                                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dd7ad8d" data-id="dd7ad8d" data-element_type="column">
                                         <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                               <div class="elementor-element elementor-element-e4b9cc6 elementor-widget elementor-widget-elementskit-heading" data-id="e4b9cc6" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                                  <div class="elementor-widget-container">
                                                     <div class="ekit-wid-con" >
                                                        <div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                           <h2 class="ekit-heading--title elementskit-section-title ">Book An <span><span>Appointment</span></span></h2>
                                                           <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                                              <div class="elementskit-border-divider"></div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                               
                                               <!-- Booking Calender -->
                                               <div class="mx-auto my-4" id="">
                                                
                                                
                                                   
                                                <div id="app" class="container">
                                                   @verbatim
                                                      
                                                  
                                                   <div v-if="step === 1">
                                                      <div v-if="step === 1">
                                                         <div class="form-group">
                                                             <label for="datepicker">Select Date:</label>
                                                             <input type="date" class="form-control" v-model="formData.date" />
                                                         </div>
                                                         <div class="form-group" v-if="timeSlots.length">
                                                             <label for="timepicker">Select Time:</label>
                                                             <select class="form-control" v-model="formData.time" name="time" id="time">
                                                               <option value=""></option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group">
                                                            <button class="btn btn-default" @click="nextStep">Next</button>

                                                         </div>
                                                     </div>
                                                  </div>
                                                   <div v-else-if="step === 2">
                                                       <div class="form-group">
                                                           <label for="name">Name:</label>
                                                           <input class="form-control" type="text" id="name" v-model="formData.name">
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="email">Email:</label>
                                                           <input class="form-control" type="email" id="email" v-model="formData.email">
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="phone">Phone:</label>
                                                           <input  class="form-control" type="tel" id="phone" v-model="formData.phone">
                                                       </div>
                                                       <div class="form-group">
                                                         <button class="btn btn-default" @click="nextStep">Next</button>

                                                      </div>
                                                   </div>
                                                   <div v-else-if="step === 3">
                                                       <h2>Review Your Information</h2>
                                                       <p>Date: {{ formData.date }}</p>
                                                       <p>Time: {{ formData.time }}</p>
                                                       <p>Name: {{ formData.name }}</p>
                                                       <p>Email: {{ formData.email }}</p>
                                                       <p>Phone: {{ formData.phone }}</p>
                                                       <button @click="nextStep">Confirm</button>
                                                   </div>
                                                   <div v-else>
                                                       <h2>Confirmation</h2>
                                                       <p>Your appointment has been confirmed!</p>
                                                   </div>
                                                   @endverbatim
                                               </div>
                                           
                                               </div>
                                            
                                             </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </section>
                          </div>
                       </div>
                    </div>
                    <div class="post-footer clearfix">
                    </div>
                    <!-- .entry-footer -->
                 </div>
                 <!-- end entry-content -->
              </div>
              <!-- end post-body -->
           </article>
           
           <nav class="post-navigation clearfix">
              <div class="post-previous">
                 <a href="../dr-md-shahidur-rahman-shikder/index.html">
                    <h3>
                       Dr. Md. Shahidur Rahman Sikder <br> 
                       <h6 class="page_banner_title_h6"> MBBS (DMC), BCS (Health) MS (Neurosurgery), MRCS (England) </h6>
                    </h3>
                    <span><i class="fa fa-long-arrow-left"></i>Previous post</span>
                 </a>
              </div>
              <div class="post-next">
                 <a href="../dr-md-aminul-islam/index.html">
                    <h3>
                       Dr. Md. Aminul Islam <br> 
                       <h6 class="page_banner_title_h6"> MBBS, MD(NEPHROLOGY), BCS(HEALTH) </h6>
                    </h3>
                    <span>Next post <i class="fa fa-long-arrow-right"></i></span>
                 </a>
              </div>
           </nav>
        </div>
        <!-- .col-md-8 -->
     </div>
     <!-- .row -->
  </div>
  <!-- .container -->
</div>
@php
// dd($doctor->timetable->where('start_time', '!=', null)->pluck('day')->toArray());
@endphp
@endsection

@section('js')

<script>
   const app = Vue.createApp({
       data() {
           return {
               step: 1,
               formData: {
                   date: '',
                   time: '',
                   name: '',
                   email: '',
                   phone: '',
               },
               availableDates: ['2022-01-10', '2022-01-15', '2022-01-20'], // Example dates
               timeSlots: [],
           };
       },
       methods: {
           nextStep() {
               this.step++;
           },
           loadTimeSlots(selectedDate) {
               // You need to load available time slots based on the selected date from the server
               // For now, let's assume you have predefined time slots
               this.timeSlots = ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'];
           },
       },
   });

   app.component('datepicker', vuejsDatepicker.default);
   app.component('timepicker', VueTimepicker.default);
   app.mount('#app');
</script>
@endsection

