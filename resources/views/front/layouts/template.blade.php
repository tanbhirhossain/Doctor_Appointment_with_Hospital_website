<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
      <title>@yield('page-title')</title>
      <link href="https://fonts.googleapis.com/css?family=Roboto%3Aregular%2C400%2C700%2C900%7CExo%3A700%2C400%2C900" rel="stylesheet">
      <meta name='robots' content='max-image-preview:large' />

      @include('front.layouts.components.head')
   
    </head>
   <body class="home page-template page-template-template page-template-template-home page-template-templatetemplate-home-php page page-id-2 medizco sidebar-inactive elementor-default elementor-kit-4824 elementor-page elementor-page-2 elementor-page-9196">
      <div data-elementor-type="header" data-elementor-id="5438" class="elementor elementor-5438 elementor-location-header">
         <div class="elementor-section-wrap">

            <!--TopBar -->
            @include('front.layouts.components.topbar')
            <!--Logo Bar -->
            @include('front.layouts.components.logobar')
            <!--NavBar -->
            @include('front.layouts.components.navbar')
           
         </div>
      </div>
      

         @yield('page-content')
                 
    
   

      @include('front.layouts.components.footer')
      @include('front.layouts.components.whatsapp')

      @include('front.layouts.components.body_js')
   </body>

    
</html>