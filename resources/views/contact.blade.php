@extends('layouts.main')
@section('title', 'Welcome To Baharindo Motor')

@section('content')
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;    
}
</style>
        <h1>Telepon</h1>
        <p>Hubungi kami jika mengalami masalah atau butuh bantuan</p>
        <table>
        <tr>
    <th>Customer service </th>
    <th>Nomor Telepon</th>
  </tr>
        @foreach ($contact as $list)
  <tr>
    <td>{{ $list ['nama'] }}</td>
    <td>{{ $list ['nomor'] }}</td>
  </tr>
        
        @endforeach
        </table>    
    </div> 

@endsection