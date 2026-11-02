
@extends('layouts.main')

@section('content')

    <div class="container mt-4">

        <a href="{{ url('/berita') }}" class="btn btn-primary mb-4">
            ← Kembali ke Berita
        </a>

        <div class="text-center">
            <h1>{{ $singelnews["judul"] }}</h1>
            <h5>{{ $singelnews["penulis"] }}</h5>
        </div>

        <hr>

        <div>
            <div class="text-justify">
                <p>{{ $singelnews['konten'] }}</p>
            </div>
        </div>

    </div>

@endsection
