@extends('frontend.templates.default') @section('content')
    <h1>Koleksi Buku</h1>
    <blockquote class="blockquote">
        <p class="flow-text">Koleksi Buku yang bisa kamu baca & pinjam !</p>
    </blockquote>

    <div class="row">
        <!-- looping sebanyak 10 dalam menampilkan data buku -->
        @foreach ($books->shuffle() as $book)
            @component('frontend.templates.components.card-book', ['book' => $book])

            @endcomponent
        @endforeach
    </div>
    <!-- paginate -->
    {{ $books->links('vendor.pagination.materialize') }}
@endsection
