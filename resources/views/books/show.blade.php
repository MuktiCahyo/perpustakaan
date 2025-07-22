@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detail Buku</h1>
    <div class="mb-3">
        <strong>Judul:</strong> {{ $book->title }}
    </div>
    <div class="mb-3">
        <strong>Kategori:</strong> {{ $book->category->name ?? '-' }}
    </div>
    <div class="mb-3">
        <strong>ISBN:</strong> {{ $book->isbn }}
    </div>
    <div class="mb-3">
        <strong>Tahun Terbit:</strong> {{ $book->published_year }}
    </div>
    <div class="mb-3">
        <strong>Stok:</strong> {{ $book->stock }}
    </div>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection 