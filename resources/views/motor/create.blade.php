@extends('layouts.main')

@section('title', 'Welcome To Baharindo Motor')

@section('content')
<main class="pt-16">
  <div class="ml-4 mr-4">
    <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-5">
        <label for="nama_motor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Motor</label>
        <input type="text" name="nama_motor" id="nama_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Nama Motor" />
      </div>

      <div class="mb-5">
        <label for="harga_motor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Harga Motor</label>
        <input type="number" name="harga_motor" id="harga_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Harga Motor" />
      </div>

      <div class="mb-5">
        <label for="tahun_motor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun Motor</label>
        <input type="number" name="tahun_motor" id="tahun_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Tahun Motor" />
      </div>

      <div class="mb-5">
        <label for="km_motor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Kilometer Ditempuh</label>
        <input type="number" name="km_motor" id="km_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukan Kilometer Ditempuh" />
      </div>

      <div class="mb-5">
        <label for="gambar_motor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Foto Motor</label>
        <input type="file" name="gambar_motor" id="gambar_motor" accept="image/*" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" />
      </div>

      <button type="submit" class="px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm">
        Submit
      </button>
    </form>
  </div>
</main>
@endsection
