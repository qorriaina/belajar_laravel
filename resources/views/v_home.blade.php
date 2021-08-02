@extends('layout.v_template')
@section ('title','Home')

@section('content')
<h1>Halaman Home</h1>
<h4>{{ $nama_mahasiswa }}</h4>
<h4>{{ $prodi }}</h4>
<h4>{{ $kelas }}</h4>
<h4>{{ $nama_perguruan_tinggi }}</h4>
<h4>{{ $alamat }}</h4>
@endsection