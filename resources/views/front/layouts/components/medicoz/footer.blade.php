<footer class="main-footer" style="background-image:url({{ asset('front/asset/images/background/7.jpg')}})">
    <div class="container">
       <div class="widgets-section">
          <div class="row">
             <div class="footer-column col-lg-6 col-md-6">
                <div class="footer-widget logo-widget">
                   <div class="logo">
                      <a  href="{{ route('front.home') }}"><img style="height:60px; width:200px;" src="{{ asset($site_setting->logo_header)}}" alt /></a>
                   </div>
                   <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary</p>
                   <ul class="list-style-two">
                      <li><a href="contact.html#map-location"><span class="icon  flaticon-map-pin-marked"></span>{!! preg_replace('/(,[^,]*,[^,]*),/', '$1<br>', $site_setting->address) !!}



                      </li>
                      <li><a href="tel:{{ $site_setting->phone }}"><span class="icon flaticon-phone"></span>{{ $site_setting->phone }}</a></li>
                      <li><a href=""><span class="icon flaticon-mail"></span>{{ $site_setting->email }}</a></li>
                   </ul>
                </div>
             </div>
             <div class="footer-column col-lg-3 col-md-6">
                <div class="footer-widget link-widget">
                   <h2>Our Departments</h2>
                   <ul class="footer-list">
                      <li><a href="#">Trauma & intensive care</a></li>
                      <li><a href="#">Aged Care</a></li>
                      <li><a href="#">Community Services</a></li>
                      <li><a href="#">Diagnosis & Investigation</a></li>
                      <li><a href="#">Medical & Surgical</a></li>
                      <li><a href="#">Mental Health</a></li>
                      <li><a href="#">Rehabitation</a></li>
                      <li><a href="#">Specialised Support Service</a></li>
                   </ul>
                </div>
             </div>
             <div class="footer-column col-lg-3 col-md-6">
                <div class="footer-widget times-widget">
                   <h2>We’re Avtailable</h2>
                   <ul class="time-list">
                      <li>Monday :<span>24 Hours</span></li>
                      <li>Tuesday :<span>24 Hours</span></li>
                      <li>Wednesday :<span>24 Hours</span></li>
                      <li>Tuesday :<span>24 Hours</span></li>
                      <li>Thursday :<span>24 Hours</span></li>
                      <li>Friday :<span>24 Hours</span></li>
                      <li>Saturday :<span>24 Hours</span></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="footer-bottom">
       <div class="container">
          <div class="clearfix">
             <div class="pull-left">
                <p class="copyright">&copy; 2024, AMZ Hospital Ltd. All Rights Reserved.</p>
             </div>
             <div class="pull-right">
                <ul class="social-box">
                   <li class="messanger"><a href="#"><span class="icon flaticon-messenger"></span> AMZ Hospital Ltd</a></li>
                   <li class="facebook"><a href="{{ $site_setting->fb_id }}" class="icon icon-facebook"></a></li>
                   <li class="linkedin"><a href="{{ $site_setting->linkedin_id }}" class="icon icon-linkedin"></a></li>
                   <li class="twitter"><a href="{{ $site_setting->twitter_id }}" class="icon icon-twitter"></a></li>
                   <li class="youtube"><a href="{{ $site_setting->youtube_id }}" class="icon icon-youtube"></a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </footer>