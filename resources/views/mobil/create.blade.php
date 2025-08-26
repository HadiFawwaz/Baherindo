@extends('layouts.main')

@section('title', 'Tambah Mobil - Baharindo')

@section('content')
<main class="pt-20">
  <div class="mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8 text-gray-900 dark:black">Tambah Mobil Baru</h1>

    <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-md space-y-6">
      @csrf

      <div>
        <label for="nama_mobil" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Nama Mobil tes
        </label>
        <input type="text" name="nama_mobil" id="nama_mobil" placeholder="Masukkan Nama Mobil"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="harga_mobil" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Harga Mobil
        </label>
        <input type="number" name="harga_mobil" id="harga_mobil" placeholder="Masukkan Harga Mobil"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="tahun_mobil" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Tahun Mobil
        </label>
        <input type="number" name="tahun_mobil" id="tahun_mobil" placeholder="Masukkan Tahun Mobil"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="km_mobil" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Kilometer Ditempuh
        </label>
        <input type="number" name="km_mobil" id="km_mobil" placeholder="Masukkan Kilometer Ditempuh"
          class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
      </div>

      <div>
        <label for="gambar_mobil" class="block mb-2 text-sm font-medium  text-black before:content-['•'] before:text-blue-500 before:mr-2">
          Foto Mobil
        </label>
        <input type="file" name="gambar_mobil" id="gambar_mobil" accept="image/*"
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
