@extends('layouts.main')
@section('title', 'Welcome To Baharindo mobil')

@section('content')
<style>
@keyframes fadeSlide {
    0% { opacity: 0; transform: translateY(-10px) scale(0.95); }
    60% { opacity: 1; transform: translateY(0) scale(1.05); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
}
.badge-anim {
    animation: fadeSlide 0.5s ease-out forwards;
}
</style>

@php
    
    $tahun_terbaru = $mobil->max('tahun_mobil');

    
    $mobil_terbaru_termahal = $mobil
        ->where('tahun_mobil', $tahun_terbaru)
        ->sortByDesc('harga_mobil')
        ->first();
@endphp

<div class="pt-24 p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-4">
  @foreach ($mobil as $list)   
  <div 
    class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group dark:bg-gray-800 dark:border-gray-700 flex flex-col"
  >
    <div class="relative overflow-hidden">
      <a href="{{ route('mobil.show', $list->id) }}">
        <img 
          class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500" 
          src="{{ asset('storage/' . $list->gambar_mobil) }}" 
          alt="mobil {{ $list['nama_mobil'] }}" 
        />
      </a>

   
      @if($list->id === $mobil_terbaru_termahal->id)
        <span class="absolute top-3 left-1/2 -translate-x-1/2 bg-purple-600 text-white text-xs font-bold px-4 py-1 rounded-full shadow-md badge-anim">
          ⭐ Juara Baru & Termahal
        </span>
      @endif

    
      @if($list['tahun_mobil'] == date('Y'))
        <span class="absolute bottom-3 left-3 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md badge-anim">
          Baru
        </span>
      @endif

      
      @if($list['harga_mobil'] > 50000000)
        <span class="absolute bottom-3 right-3 bg-yellow-400 text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-md badge-anim" style="animation-delay:0.1s">
          Terlaris
        </span>
      @endif
    </div>

    <div class="p-5 flex-1 flex flex-col justify-between">
      <div>
        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Rp {{ number_format($list['harga_mobil'], 0, ',', '.') }}
        </h5>
        <h5 class="mb-3 text-xl font-semibold text-gray-800 dark:text-white">
          {{ $list['nama_mobil'] }}
        </h5>
        
        <div class="flex gap-2 mb-4">
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">
            {{ $list['tahun_mobil'] }}
          </span>
          <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">
            {{ number_format($list['km_mobil'], 0, ',', '.') }} km
          </span>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
