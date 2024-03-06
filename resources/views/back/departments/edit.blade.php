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
                <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">Department</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Edit</span>
            </div>
        </li>
    </ol>
</nav>

<h2 class="mx-7 font-semibold px-3 py-3 text-center  text-gray-700 border border-gray-200 rounded-lg bg-gray-50">Edit Department Information</h2>

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

<form id="data-form" class="lg:ms-auto mt-1 mx-auto text-center" action="{{ route('departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="py-7 px-7 rounded-md bg-white">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
            <input value="{{ $department->name }}" type="text" id="name" name="name" placeholder="Name *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
            <input value="{{ $department->slug }}" type="text" id="slug" name="slug" placeholder="Slug *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
            <div class="md:col-span-2">
                <textarea name="description" rows="5" cols="" placeholder="" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">{{ $department->description }}</textarea>
            </div>
            <div>
                <label for="image">Image</label>
                <div>
                    <img style="height: 100px; width:80px;margin-bottom: 15px; " src="{{ $department->image }}" alt="">
                </div>
                <input type="file" id="image" name="image" placeholder="Select Photo" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
            </div>
            <div>
                <label for="image">Icon *</label>
                <div>
                    <img style="height: 100px; width:80px;margin-bottom: 15px; border:1px solid green; border-radius: 20px; padding: 10px; " src="{{ $department->icon }}" alt="">
                </div>
                <input type="file" id="icon" name="icon" placeholder="Select Icon" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
            </div>
            <select id="department_id" name="department_id" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                <option value="">Select Parent Department</option>
                @foreach ($departments as $item)
                    <option value="{{ $item->id }}" {{ $department->parent_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
            <input value="{{ $department->meta_description }}" type="text" id="meta_description" name="meta_description" placeholder="Meta Description" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
            <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update Department</button>
        </div>
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

@endsection
