@extends('layouts.main')

@section('content')
<div class="mx-auto py-10 pt-20 px-4">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit motor</h1>

    <form action="{{ route('motor.update', $motor->id) }}" 
          method="POST" 
          enctype="multipart/form-data" 
          class="bg-white p-6 rounded-xl shadow-md space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium mb-2 text-gray-700">Nama motor</label>
            <input type="text" 
                   name="nama_motor" 
                   value="{{ $motor->nama_motor }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Harga motor</label>
            <input type="number" 
                   name="harga_motor" 
                   value="{{ $motor->harga_motor }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Kilometer motor</label>
            <input type="number" 
                   name="km_motor" 
                   value="{{ $motor->km_motor }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Tahun motor</label>
            <input type="number" 
                   name="tahun_motor" 
                   value="{{ $motor->tahun_motor }}" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block font-medium mb-2 text-gray-700">Gambar motor</label>
            @if($motor->gambar_motor)
                <img src="{{ asset('storage/' . $motor->gambar_motor) }}" 
                     alt="{{ $motor->nama_motor }}" 
                     class="h-40 w-auto mb-3 rounded-lg object-cover border">
            @endif
            <input type="file" 
                   name="gambar_motor" 
                   class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <button type="submit" 
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition w-full">
                Update motor
            </button>
        </div>
    </form>
</div>
@endsection
