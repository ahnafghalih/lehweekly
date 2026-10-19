@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1>{{ $singelnews["judul"] }}</h1>
        <h5>{{ $singelnews["penulis"] }}</h5>
    </div>

    <div>
        <div class="text-justify">
            <p>{{ $singelnews['konten'] }}</p>
        </div>
    </div>

    <a href="/berita">Kembali</a>
@endsection