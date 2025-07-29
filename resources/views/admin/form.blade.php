@extends('layouts.main')
@section('title', 'Welcome To Baharindo Motor')
<main class="pt-16"> {{-- This is the fix --}}  

@section('content')


<div class="pt-16 ml-4 mr-4">
    <div class="mb-5">
      <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Motor</label>
      <input type="text" id="Nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 white:text-white" placeholder="Masukan Nama Motor" />
    </div>
    <div class="mb-5">
      <label for="Harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Harga Motor</label>
      <input type="number" id="Harga" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 white:text-white" placeholder="Masukan Harga Motor" />
    </div>
    <div class="mb-5">
      <label for="Tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun Motor</label>
      <input type="number" id="Tahun" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 white:text-white" placeholder="Masukan Tahun Motor" />
    </div>
    <div class="mb-5">
      <label for="Kilometer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Kilometer Ditempuh</label>
      <input type="number" id="Kilometer" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 white:text-white" placeholder="Masukan Kilometer Ditempuh" />
    </div>
    
  




    <button class="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
  Submit
</button>

  </div>



@endsection




