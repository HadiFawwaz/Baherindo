@extends('layouts.main')

@section('content')
<div class="mx-auto py-10 pt-20 px-4">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit mobil</h1>

    <form action="{{ route('mobil.update', $mobil->id) }}" 
          method="POST" 
          enctype="multipart/form-data" 
          class="bg-white p-6 rounded-xl shadow-md space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium mb-2 text-gray-700">Nama mobil</label>
            <input type="text" 
                   name="nama_mobil" 
                   value="{{ $mobil->nama_mobil }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Harga mobil</label>
            <input type="number" 
                   name="harga_mobil" 
                   value="{{ $mobil->harga_mobil }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Kilometer mobil</label>
            <input type="number" 
                   name="km_mobil" 
                   value="{{ $mobil->km_mobil }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Tahun mobil</label>
            <input type="number" 
                   name="tahun_mobil" 
                   value="{{ $mobil->tahun_mobil }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Gambar mobil</label>
            @if($mobil->gambar_mobil)
                <img src="{{ asset('storage/' . $mobil->gambar_mobil) }}" 
                     alt="{{ $mobil->nama_mobil }}" 
                     class="h-40 w-auto mb-3 rounded-lg object-cover border">
            @endif
            <input type="file" 
                   name="gambar_mobil" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <button type="submit" 
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition w-full">
                Update mobil
            </button>
        </div>
    </form>
</div>
@endsection
