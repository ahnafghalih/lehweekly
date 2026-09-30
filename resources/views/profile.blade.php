@extends('layouts.main')

@section('content')

    <h1> HALAMAN PROFILE </h1>
    <p>Nama : {{ $name }}</p>
    <p>NIM : {{ $nim }}</p>
    <P>Prodi : {{ $prodi}}</P>
    <img src="images/{{ $gambar }}" width="200px" />
@endsection