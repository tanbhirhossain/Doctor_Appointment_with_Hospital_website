@extends('back.layouts.template')

@section('css')
<style></style>
@endsection
@section('page-content')

<nav class="mx-7 flex px-7 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">Setting</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Update</span>
        </div>
      </li>
    </ol>
</nav>

<h2 class="mx-7 font-semibold px-3 py-3 text-center  text-gray-700 border border-gray-200 rounded-lg bg-gray-50">Frontend Settings</h2>

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
<form id="data-form" class="lg:ms-auto mt-1 mx-auto text-center" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="py-7 px-7 rounded-md bg-white">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
            <!-- Logo Header Input with Preview -->
            <div>
                <label for="logo_header">Logo Header:</label><br>
                @if($settings->logo_header)
                    <img src="{{ asset($settings->logo_header) }}" alt="Logo Header" style="max-width: 200px; max-height: 200px;"><br>
                @endif
                <input type="file" id="logo_header" name="logo_header" accept="image/*" onchange="previewImage('logo_header', 'logo_header_preview')">
                <img id="logo_header_preview" src="" alt="Preview" style="max-width: 200px; max-height: 200px; display: none;">
            </div>

            <!-- Logo Bottom Input with Preview -->
            <div>
                <label for="logo_bottom">Logo Bottom:</label><br>
                @if($settings->logo_bottom)
                    <img src="{{ asset($settings->logo_bottom) }}" alt="Logo Bottom" style="max-width: 200px; max-height: 200px;"><br>
                @endif
                <input type="file" id="logo_bottom" name="logo_bottom" accept="image/*" onchange="previewImage('logo_bottom', 'logo_bottom_preview')">
                <img id="logo_bottom_preview" src="#" alt="Preview" style="max-width: 200px; max-height: 200px; display: none;">
            </div>

            <!-- Logo Navbar Input with Preview -->
            <div>
                <label for="logo_navbar">Logo Navbar:</label><br>
                @if($settings->logo_navbar)
                    <img src="{{ asset($settings->logo_navbar) }}" alt="Logo Navbar" style="max-width: 200px; max-height: 200px;"><br>
                @endif
                <input type="file" id="logo_navbar" name="logo_navbar" accept="image/*" onchange="previewImage('logo_navbar', 'logo_navbar_preview')">
                <img id="logo_navbar_preview" src="#" alt="Preview" style="max-width: 200px; max-height: 200px; display: none;">
            </div>
               <!-- Contact Fields -->
               <textarea id="address" name="address" placeholder="Address" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">{{ $settings->address }}</textarea>
               <input value="{{ $settings->email }}" type="email" id="email" name="email" placeholder="Email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
               <input value="{{ $settings->phone }}" type="tel" id="phone" name="phone" placeholder="Phone" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
               <input value="{{ $settings->time_schedule }}" type="text" id="time_schedule" name="time_schedule" placeholder="Time Schedule" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
   
               <!-- Social Fields -->
               <input value="{{ $settings->fb_id }}" type="text" id="fb_id" name="fb_id" placeholder="Facebook ID" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
               <input value="{{ $settings->twitter_id }}" type="text" id="twitter_id" name="twitter_id" placeholder="Twitter ID" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
               <input value="{{ $settings->linkedin_id }}" type="text" id="linkedin_id" name="linkedin_id" placeholder="LinkedIn ID" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
               <input value="{{ $settings->instagram_id }}" type="text" id="instagram_id" name="instagram_id" placeholder="Instagram ID" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
               <input value="{{ $settings->youtube_id }}" type="text" id="youtube_id" name="youtube_id" placeholder="YouTube ID" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
          
        </div>
    </div>

    <button type="submit" class="mt-4 py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update Settings</button>
</form>

{{-- <script>
    function previewImage(inputId, imageId) {
        var input = document.getElementById(inputId);
        var image = document.getElementById(imageId);
        image.style.display = 'block';
        image.src = URL.createObjectURL(input.files[0]);
    }
</script> --}}

<script>
    // Function to preview existing image
    function previewExistingImage(imageUrl, imageId) {
        var image = document.getElementById(imageId);
        if (image) {
            if (imageUrl) {
                image.src = imageUrl;
                image.style.display = 'block';
            }
        } else {
            console.error("Element with ID '" + imageId + "' not found.");
        }
    }

    // Function to preview uploaded image
    function previewImage(inputId, imageId) {
        var input = document.getElementById(inputId);
        var image = document.getElementById(imageId);
        if (image) {
            image.style.display = 'block';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        } else {
            console.error("Element with ID '" + imageId + "' not found.");
        }
    }


</script>


@endsection