@extends('admin.templates.default')

@section('content')

 <div class="card">
   <div class="card-body">
    <form action="{{ route('admin.book.update', $book) }}" method="POST"
     enctype="multipart/form-data">

        {{csrf_field()}}
        @method("PUT")

        <div class="form-group @error('title') has-error @enderror">
            <label for="title">Judul Buku</label>
            <input type="text" class="form-control" 
            value="{{ $book->title ?? old('title') }}"
            name="title" placeholder="Masukan Judul Buku" 
            required autocomplete="title" autofocus/>

            @error('title')
              <span class="help-block"> {{ $message }}</span>
            @enderror
        </div>

        <div class="form-group @error('description') has-error @enderror">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="" rows="3"
            class="form-control" placeholder="Tuliskan Deskripsi Buku">
            {{$book->description ?? old('description') }}
            </textarea>

            @error('description')
              <span class="help-block"> {{ $message }}</span>
            @enderror
        </div>

        <div class="form-group @error('author_id') has-error @enderror">
            <label for="author_id">Penulis</label>
            <select name="author_id" id="" class="form-control select2">
                @foreach ($authors as $author)
                <option 
                   value="{{ $author->id }}"
                   @if($author->id === $book->author_id)
                      selected
                   @endif
                >
                    {{ $author->name }}
                 </option>
                 @endforeach
            </select>

            @error('author_id')
              <span class="help-block"> {{ $message }}</span>
            @enderror
        </div>

        <div class="form-group @error('cover') has-error @enderror">
            <label for="cover">Sampul Buku</label>
            <input type="file" class="form-control" name="cover"/>

             @error('cover')
              <span class="help-block"> {{ $message }}</span>
            @enderror
        </div>

        <div class="form-group @error('qty') has-error @enderror">
            <label for="qty">Jumlah Buku</label>
            <input type="text" class="form-control" 
            value="{{ $book->qty ?? old('qty') }}"
            name="qty" placeholder="Masukan Jumlah Buku" 
            required autocomplete="qty" autofocus/>

              @error('qty')
              <span class="help-block"> {{ $message }}</span>
            @enderror
        </div>

     <button class="btn btn-primary">Simpan</button>
    </form>

          </div>
    </div>


@endsection

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@push('scripts')
  <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    
  <script>
     $('.select2').select2();
  </script>
@endpush