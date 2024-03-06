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
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">Doctors</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Create</span>
        </div>
      </li>
    </ol>
</nav>

<h2 class="mx-7 font-semibold px-3 py-3 text-center  text-gray-700 border border-gray-200 rounded-lg bg-gray-50">Update Doctor Information</h2>

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

<form id="data-form" class="lg:ms-auto mt-1 mx-auto text-center" action="{{ route('doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">@csrf
    @method('PUT')
    <div class="py-7 px-7 rounded-md bg-white">
                                  
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
              <input value="{{ $doctor->name }}" type="text" id="name" name="name" placeholder="Name *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input value="{{ $doctor->slug }}" type="text" id="slug" name="slug" placeholder="Slug *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input value="{{ $doctor->meta_description }}" type="text" id="meta_description" name="meta_description" placeholder="Meta Description " class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">

              <input value="{{ $doctor->phone }}" type="text" id="phone" name="phone" placeholder="Phone " class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
              <input value="{{ $doctor->email }}" type="email" id="email" name="email" placeholder="E-mail" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
              <select id="department_id" name="department_id" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                <option value="">Select Department</option>
                @foreach ($departments as $item)
                    <option value="{{ $item->id }}" {{ $doctor->department_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
                
              </select>
              <input value="{{ $doctor->qualification }}" type="text" id="qualification" name="qualification" placeholder="Qualification *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input value="{{ $doctor->speciality }}" type="text" id="speciality" name="speciality" placeholder="speciality *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">

              <input value="{{ $doctor->designation }}" type="text" id="designation" name="designation" placeholder="Designation *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input value="{{ $doctor->institute }}" type="text" id="institute" name="institute" placeholder="Institute *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input value="{{ $doctor->visit_fee }}" type="number" id="visit_fee" name="visit_fee" placeholder="Visiting fees *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input value="{{ $doctor->image }}" type="file" id="image" name="image" placeholder="Select Doctors Photo" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">

              <input value="{{ $doctor->chamber_location }}" type="text" id="chamber_location" name="chamber_location" placeholder="chamber_location *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">

           
              <div class="md:col-span-2">
                <textarea name="biography" rows="5" cols="" placeholder="Biography " class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">{{ $doctor->biography }}</textarea>
              </div>
              <!-- <div class="md:col-span-2">
                <input type="checkbox" name="" id="" class="mr-2 sm:m-1"> 
                <label for="" class="text-sm col-span-2">
                  Autoriser OC à vous envoyer des lettres d'information par E-mail. 
                </label>
              </div> -->
              {{-- <div class="md:col-span-2">
                <button class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">Create</button>
              </div> --}}
            </div><!-- Grid End -->
    </div>
    <h2 class="mx-7 font-semibold px-3 py-3 text-center  text-gray-700 border border-gray-200 rounded-lg bg-gray-50">Doctor TimeTable</h2>
    <div id="timetable-container">
      <!-- Table headers and rows filled with doctor's timetable information -->
      <table id="timetable" class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="px-6 py-3">Day</th>
                  <th scope="col" class="px-6 py-3">Start Time</th>
                  <th scope="col" class="px-6 py-3">End Time</th>
                  <th scope="col" class="px-6 py-3">Remarks</th>
              </tr>
          </thead>
          <!-- Table body -->
          <tbody>
              @foreach($doctor->timetable as $key => $time)
              <tr class="bg-white border-b hover:bg-gray-50">
                  <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap">
                      <select name="day[{{ $key }}][day]" id="" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                        <option value="sat" {{ $time->day == 'sat' ? 'selected' : '' }}>Saturday</option>
                        <option value="sun" {{ $time->day == 'sun' ? 'selected' : '' }}>Sunday</option>
                        <option value="mon" {{ $time->day == 'mon' ? 'selected' : '' }}>Monday</option>
                        <option value="tue" {{ $time->day == 'tue' ? 'selected' : '' }}>Tuesday</option>
                        <option value="wed" {{ $time->day == 'wed' ? 'selected' : '' }}>Wednesday</option>
                        <option value="thu" {{ $time->day == 'thu' ? 'selected' : '' }}>Thursday</option>
                        <option value="fri" {{ $time->day == 'fri' ? 'selected' : '' }}>Friday</option>
                      </select>
                  </th>
                  <td class="px-6 py-3">
                      <input type="time" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" name="day[{{ $key }}][start_time]" value="{{ $time->start_time }}">
                  </td>
                  <td class="px-6 py-3">
                      <input type="time" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" name="day[{{ $key }}][end_time]" value="{{ $time->end_time }}">
                  </td>
                  <td class="px-6 py-3">
                      <input type="text" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700" name="day[{{ $key }}][remarks]" value="{{ $time->remarks }}">
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  
  <!-- Add and remove buttons -->
  <div class="flex justify-center mt-3">
      <button id="add-row" type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2">Add Row</button>
      <button id="remove-row" type="button" class="bg-red-500 text-white px-4 py-2 rounded-md">Remove Row</button>
  </div>
      <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 my-6 text-center me-2 mb-2 w-full">Update Doctor</button>
        </div>

</form>
@endsection

@section('js')

@include('sweetalert::alert')


<script src="https://cdn.tiny.cloud/1/dty7dp6bqsvnj4v2533wem1xjvj7jwevfjnkbadqyvmxszkt/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
    
});

</script>


<script>
    document.getElementById('name').addEventListener('input', function () {
      // Get the value from the name input
      var nameValue = this.value.trim();

      // Replace spaces with dashes and convert to lowercase to create a slug
      var slugValue = nameValue.toLowerCase().replace(/\s+/g, '-');

      // Set the generated slug in the slug input field
      document.getElementById('slug').value = slugValue;
    });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      // Function to add a new row to the timetable
      function addRow() {
          const days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

          const tbody = document.querySelector('#timetable tbody');
          const newRow = document.createElement('tr');
          newRow.classList.add('bg-white', 'border-b', 'hover:bg-gray-50');

          // Input for day (select element)
          const dayCell = document.createElement('th');
          dayCell.scope = 'row';
          dayCell.classList.add('px-6', 'py-3', 'font-medium', 'text-gray-900', 'whitespace-nowrap');
          const daySelect = document.createElement('select');
          daySelect.classList.add('w-full', 'border', 'border-gray-300', 'rounded-md', 'py-2', 'px-3', 'focus:outline-none', 'focus:border-blue-700');
          daySelect.name = 'day[0][day]';
          days.forEach((day, index) => {
              const option = document.createElement('option');
              option.value = day.toLowerCase().substring(0, 3); // Using lowercase abbreviated day names
              option.textContent = day;
              daySelect.appendChild(option);
          });
          dayCell.appendChild(daySelect);

          // Input for start time
          const startTimeCell = document.createElement('td');
          startTimeCell.classList.add('px-6', 'py-3');
          const startTimeInput = document.createElement('input');
          startTimeInput.type = 'time';
          startTimeInput.classList.add('w-full', 'border', 'border-gray-300', 'rounded-md', 'py-2', 'px-3', 'focus:outline-none', 'focus:border-blue-700');
          startTimeInput.name = 'day[0][start_time]';
          startTimeCell.appendChild(startTimeInput);

          // Input for end time
          const endTimeCell = document.createElement('td');
          endTimeCell.classList.add('px-6', 'py-3');
          const endTimeInput = document.createElement('input');
          endTimeInput.type = 'time';
          endTimeInput.classList.add('w-full', 'border', 'border-gray-300', 'rounded-md', 'py-2', 'px-3', 'focus:outline-none', 'focus:border-blue-700');
          endTimeInput.name = 'day[0][end_time]';
          endTimeCell.appendChild(endTimeInput);

          // Input for remarks
          const remarksCell = document.createElement('td');
          remarksCell.classList.add('px-6', 'py-3');
          const remarksInput = document.createElement('input');
          remarksInput.type = 'text';
          remarksInput.classList.add('w-full', 'border', 'border-gray-300', 'rounded-md', 'py-2', 'px-3', 'focus:outline-none', 'focus:border-blue-700');
          remarksInput.name = 'day[0][remarks]';
          remarksCell.appendChild(remarksInput);

          // Append cells to the new row
          newRow.appendChild(dayCell);
          newRow.appendChild(startTimeCell);
          newRow.appendChild(endTimeCell);
          newRow.appendChild(remarksCell);

          // Append the new row to the table body
          tbody.appendChild(newRow);
      }

      // Function to remove the last row from the timetable
      function removeRow() {
          const tbody = document.querySelector('#timetable tbody');
          const rows = tbody.querySelectorAll('tr');
          if (rows.length > 1) {
              tbody.removeChild(rows[rows.length - 1]);
          }
      }

      // Add event listeners to the add and remove buttons
      document.getElementById('add-row').addEventListener('click', addRow);
      document.getElementById('remove-row').addEventListener('click', removeRow);
  });
</script>




 

@endsection

