@extends('layouts.main')

@section('title', 'Welcome To Baharindo mobil')

@section('content')
<main class="pt-16">
  <div class="ml-4 mr-4">
    <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-5">
        <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama mobil</label>
        <input type="text" name="nama_mobil" id="nama_mobil" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Nama mobil" />
      </div>

      <div class="mb-5">
        <label for="harga_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Harga mobil</label>
        <input type="number" name="harga_mobil" id="harga_mobil" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Harga mobil" />
      </div>

      <div class="mb-5">
        <label for="tahun_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun mobil</label>
        <input type="number" name="tahun_mobil" id="tahun_mobil" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Tahun mobil" />
      </div>

      <div class="mb-5">
        <label for="km_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Kilometer Ditempuh</label>
        <input type="number" name="km_mobil" id="km_mobil" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Kilometer Ditempuh" />
      </div>

      <div class="mb-5">
        <label for="gambar_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Foto mobil</label>
        <input type="file" name="gambar_mobil" id="gambar_mobil" accept="image/*" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" />
      </div>

      <button type="submit" class="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm">
        Submit
      </button>
    </form>
  </div>
</main>
@endsection