@extends('layouts.main')

@section('title', 'Tambah motor - Baharindo')

@section('content')
<main class="pt-20">
  <div class="mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8 text-gray-900 dark:black">Tambah motor Baru</h1>

    <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-md space-y-6">
      @csrf

      <div>
        <label for="nama_motor" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Nama motor
        </label>
        <input type="text" name="nama_motor" id="nama_motor" placeholder="Masukkan Nama motor"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="harga_motor" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Harga motor
        </label>
        <input type="number" name="harga_motor" id="harga_motor" placeholder="Masukkan Harga motor"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="tahun_motor" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Tahun motor
        </label>
        <input type="number" name="tahun_motor" id="tahun_motor" placeholder="Masukkan Tahun motor"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="km_motor" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Kilometer Ditempuh
        </label>
        <input type="number" name="km_motor" id="km_motor" placeholder="Masukkan Kilometer Ditempuh"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="gambar_motor" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Foto motor
        </label>
        <input type="file" name="gambar_motor" id="gambar_motor" accept="image/*"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <button type="submit"
        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition focus:outline-none focus:ring-4 focus:ring-blue-300">
        Submit
      </button>
    </form>
  </div>
</main>
@endsection
