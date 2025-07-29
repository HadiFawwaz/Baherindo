@extends('layouts.main')
@section('title', 'Welcome To Baharindo Motor')

@section('content')
<div class="pt-16 p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-4">
  @foreach ($motor as $list)   
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
     <img 
    class="w-full h-auto rounded-t-lg object-cover" 
    src="/images/FlzWpv4WYAErzvt.png" 
    alt="Motor {{ $list['nama'] }}" 
/>

    </a>
    <div class="p-5">
      <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $list['price'] }}</h5>
      </a>
      <h5 class="mb-2 text-xl font-semibold text-gray-800 dark:text-white">{{ $list['nama'] }}</h5>
      <div class="flex gap-2 text-gray-700 dark:text-gray-300">
        <span class="text-md font-medium">{{ $list['tahun'] }}</span>
        <span>|</span>
        <span class="text-md font-medium">{{ $list['km'] }}</span>
      </div>
    </div>
  </div>
  @endforeach
</div>



@endsection


