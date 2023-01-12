@extends('frontend.templates.default')

@section('content')
   <div class="row">
     <i class="ri-h-1"><h2>Buku Yang Sedang dipinjam</h2></i>
        @foreach ($books as $book)
              <div class="col 12 m12">
        <div class="card horizontal hoverable">
            <img src="{{ $book->getCover() }}" alt="">
            <div class="card-stacked">
                <div class="card-content">
                    <h4 class="red-text accent-2">{{ $book->title }}</h4>
                    <blockquote>
                        <p>{{ $book->description }}</p>
                    </blockquote>
                    <p><i class="material-icons">person</i> : {{ $book->author->name }}</p>
                </div>
            </div>
        </div>
    </div>
        @endforeach
   </div>
    
@endsection