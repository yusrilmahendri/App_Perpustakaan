@extends('admin.templates.default')

@section('content')

  <div class="card">
    <div class="card-body">

    <form action="{{ route('admin.author.update', $author) }}"
    method="POST">

        @csrf
        @method("PUT")

      <div class="form-group @error('name') has-error @enderror">
          <label for="name">Nama Penulis</label>
         <input type="name" class="form-control"
             name="name" value="{{ old('name') ?? $author->name }}"/>

          @error('name')
               <span class="help-block">{{ $message }}</span>
          @enderror
      </div>

     <button class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>

@endsection
