@extends('layouts.main')

@section('content')
    @foreach ($beritas as $berita)
        <h2>
            <a href="{{ route('berita.detail', $berita->slug) }}">
                {{ $berita->judul }}
            </a>
        </h2>

        <h5>{{ $berita->penulis }}</h5>

        <p>{{ $berita->konten }}</p>
    @endforeach
@endsection