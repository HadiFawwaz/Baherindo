@extends('layouts.main')
@section('title', 'Welcome To Baharindo Mobil')

@section('content')
<style>
@keyframes fadeSlide {
    0% { opacity: 0; transform: translateY(-10px) scale(0.95); }
    60% { opacity: 1; transform: translateY(0) scale(1.05); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.badge-anim {
    animation: fadeSlide 0.5s ease-out forwards;
}

.card-hover {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.card-hover:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.price-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.premium-badge {
    background: linear-gradient(135deg, #ffd700, #ffed4e);
    box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
}

.new-badge {
    background: linear-gradient(135deg, #ff6b6b, #ee5a52);
    box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
}

.bestseller-badge {
    background: linear-gradient(135deg, #4ecdc4, #44a08d);
    box-shadow: 0 4px 15px rgba(78, 205, 196, 0.4);
}

.image-overlay {
    background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.1) 100%);
}
</style>

@php
    $tahun_terbaru = $mobil->max('tahun_mobil');

    $mobil_terbaru_termahal = $mobil
        ->where('tahun_mobil', $tahun_terbaru)
        ->sortByDesc('harga_mobil')
        ->first();
@endphp

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-slate-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
  <div class="pt-24 px-4 max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 bg-clip-text text-transparent dark:from-white dark:via-purple-300 dark:to-white mb-4">
        Premium mobilcycle Collection
      </h1>
      <p class="text-lg text-slate-600 dark:text-slate-300 max-w-2xl mx-auto">
        Discover our curated selection of high-performance mobilcycles
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 pb-12">
      @foreach ($mobil as $list)   
      <div class="bg-white/80 backdrop-blur-sm border border-slate-200/50 rounded-2xl shadow-lg card-hover overflow-hidden group dark:bg-gray-800/80 dark:border-gray-700/50 flex flex-col">
        <div class="relative overflow-hidden rounded-t-2xl">
          <a href="{{ route('mobil.show', $list->id) }}">
            <img 
              class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-700 ease-out" 
              src="{{ asset('storage/' . $list->gambar_mobil) }}" 
              alt="mobil {{ $list['nama_mobil'] }}" 
            />
            <div class="absolute inset-0 image-overlay"></div>
          </a>

          @if($list->id === $mobil_terbaru_termahal->id)
            <span class="absolute top-4 left-1/2 -translate-x-1/2 premium-badge text-gray-900 text-xs font-bold px-4 py-2 rounded-full badge-anim">
              ⭐ Juara Baru
            </span>
          @endif

          @if($list['harga_mobil'] > 50000000)
              <span class="absolute top-4 left-1/2 -translate-x-1/2 premium-badge text-gray-900 text-xs font-bold px-4 py-2 rounded-full badge-anim">
                Termahal
              </span>
            @endif

          <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end">
            @if($list['tahun_mobil'] == date( 'Y'))
              <span class="new-badge text-white text-xs font-bold px-3 py-1.5 rounded-full badge-anim">
                Baru
              </span>
            @endif

            @if($list['harga_mobil'] > 50000000)
              <span class="bestseller-badge text-white text-xs font-bold px-3 py-1.5 rounded-full badge-anim ml-auto" style="animation-delay:0.1s">
                Terlaris
              </span>
            @endif
          </div>
        </div>

        <div class="p-6 flex-1 flex flex-col justify-between">
          <div>
            <h5 class="mb-2 text-2xl font-bold price-gradient">
              Rp {{ number_format($list['harga_mobil'], 0, ',', '.') }}
            </h5>
            
            <h5 class="mb-4 text-xl font-semibold text-slate-800 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">
              {{ $list['nama_mobil'] }}
            </h5>
            
            <div class="flex gap-3 mb-4">
              <span class="px-4 py-2 bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-700 text-sm font-medium rounded-xl border border-blue-100 dark:from-blue-900/20 dark:to-indigo-900/20 dark:text-blue-300 dark:border-blue-800">
                {{ $list['tahun_mobil'] }}
              </span>
              <span class="px-4 py-2 bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-700 text-sm font-medium rounded-xl border border-emerald-100 dark:from-emerald-900/20 dark:to-teal-900/20 dark:text-emerald-300 dark:border-emerald-800">
                {{ number_format($list['km_mobil'], 0, ',', '.') }} km
              </span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
