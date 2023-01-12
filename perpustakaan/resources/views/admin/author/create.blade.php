@extends('admin.templates.default')

@section('content')

   <div class="card">
     <div class="card-body">
       <form action="{{ route('admin.author.store') }}" method="POST">

        {{csrf_field()}}

        <div class="form-group @error('name') has-error @enderror">
            <label for="name">Nama Penulis</label>
                <input type="text" class="form-control"
                    name="name" placeholder="masukan nama penulis"
                    value="{{ old('name') }}" required autocomplete="name" autofocus/>

                @error('name')
                    <span class="help-block">{{ $message }}</span>
                @enderror
        </div>

       <button class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>

@endsection
