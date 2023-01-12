@extends('admin.templates.default')

@section('content')

  <div class="card">
    <div class="card-body">

    <form action="{{ route('admin.pengguna.update', $pengguna) }}"
    method="POST">

        @csrf
        @method("PUT")

      <div class="form-group @error('password') has-error @enderror">
          <label for="password">Password</label>
         <input type="password" class="form-control"
             name="password" value="{{ old('password') ?? $pengguna->password }}"/>

          @error('password')
               <span class="help-block">{{ $message }}</span>
          @enderror
      </div>

     <button class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>

@endsection
