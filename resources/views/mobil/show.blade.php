@extends('layouts.main')
@section('title', $mobil->nama_mobil)

@section('content')
<style>
@keyframes fadeUp {
    0% { opacity: 0; transform: translateY(10px); }
    100% { opacity: 1; transform: translateY(0); }
}
.animate-fadeUp {
    animation: fadeUp 0.6s ease-out forwards;
}

/* Animasi spinner kecil */
.spinner {
  border: 2px solid transparent;
  border-top: 2px solid white;
  border-radius: 50%;
  width: 16px;
  height: 16px;
  animation: spin 0.8s linear infinite;
  display: inline-block;
  vertical-align: middle;
  margin-left: 8px;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<div class="pt-20 px-4 mx-auto max-w-5xl animate-fadeUp">
   
    {{-- Judul --}}
    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-6 text-center">
        {{ $mobil->nama_mobil }}
    </h1>

    {{-- Gambar --}}
    <div class="mb-6 relative">
        <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
            <img 
                class="w-full h-auto max-h-96 object-contain bg-white rounded-lg shadow-lg p-2" 
                src="{{ asset('storage/' . $mobil->gambar_mobil) }}" 
                alt="{{ $mobil->nama_mobil }}"
                loading="lazy"
            />
        </div>

        {{-- Badge Baru --}}
        @if($mobil->tahun_mobil == date('Y'))
            <span class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">
                Baru
            </span>
        @endif
    </div>

    {{-- Card Detail --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 space-y-4">
        
        {{-- Harga --}}
        <p class="text-3xl text-green-600 font-extrabold mb-2">
            Rp {{ number_format($mobil->harga_mobil, 0, ',', '.') }}
        </p>

        {{-- Info --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700 dark:text-gray-300">
            <div class="flex items-center gap-2 bg-gray-50 dark:bg-gray-700 p-3 rounded-lg">
                <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 1C5.92 1 1 5.92 1 12c0 6.08 4.92 11 11 11s11-4.92 11-11c0-6.08-4.92-11-11-11zm0 20c-4.96 0-9-4.04-9-9s4.04-9 9-9 9 4.04 9 9-4.04 9-9 9z"/>
                </svg>
                <span>Tahun: {{ $mobil->tahun_mobil }}</span>
            </div>
            <div class="flex items-center gap-2 bg-gray-50 dark:bg-gray-700 p-3 rounded-lg">
                <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4 6h16v2H4zm0 5h10v2H4zm0 5h7v2H4z"/>
                </svg>
                <span>Jarak Tempuh: {{ number_format($mobil->km_mobil, 0, ',', '.') }} km</span>
            </div>
        </div>

        {{-- Tombol Order --}}
        <div class="mt-6">
            <a 
                href="https://wa.me/628123456789?text=Halo%2C%20saya%20ingin%20memesan%20{{ urlencode($mobil->nama_mobil) }}" 
                target="_blank" 
                class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-lg shadow-lg transition duration-200"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 mr-2" viewBox="0 0 24 24">
                    <path d="M20.52 3.48A11.77 11.77 0 0012 0C5.37 0 0 5.37 0 12c0 2.12.55 4.18 1.59 6.02L0 24l6.17-1.62A11.94 11.94 0 0012 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.18-3.48-8.52zM12 21.82c-2.07 0-4.09-.56-5.86-1.63l-.42-.25-3.66.96.98-3.56-.27-.43A9.84 9.84 0 012.18 12C2.18 6.59 6.59 2.18 12 2.18S21.82 6.59 21.82 12 17.41 21.82 12 21.82zm5.53-6.47c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.8-1.49-1.79-1.66-2.09-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.61-.92-2.21-.24-.57-.48-.5-.67-.51l-.57-.01c-.2 0-.52.07-.8.37-.27.3-1.05 1.03-1.05 2.51 0 1.48 1.08 2.91 1.23 3.11.15.2 2.13 3.25 5.17 4.56.72.31 1.28.5 1.72.64.72.23 1.38.2 1.9.12.58-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z"/>
                </svg>
                Order via WhatsApp
            </a>
        </div>

        {{-- Tombol Edit & Hapus --}}
            <div class="flex gap-2 items-center mt-4">
        <a href="{{ route('mobil.edit', $mobil->id) }}" 
           class="flex-1 px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700 transition text-center">
           Edit
        </a>

        <form id="delete-form-{{ $mobil->id }}" action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" class="flex-1">
            @csrf
            @method('DELETE')
            <button type="button" onclick="confirmDelete({{ $mobil->id }})" 
                    class="w-full px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                Hapus
            </button>
        </form>
    </div>

</div>

{{-- SweetAlert2 CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Yakin ingin menghapus mobil ini?',
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus sekarang!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });
}
</script>
@endsection

