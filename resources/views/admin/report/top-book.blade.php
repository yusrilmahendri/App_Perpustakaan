@extends('admin.templates.default')

@section('content')
<div class "card">
 <div class="card-body">
  <div class="box">
    <table  class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>Deskripsi</th>
              <th>Jumlah Buku</th>
              <th>Total Dipinjam</th>
              <th>Penulis</th>
              <th>Sampul</th>
            </tr>
        </thead>
 
        <tbody>
         @php 
           $page = 1;
           if(request()->has('page')){
               $page = request('page');
           }
           $no = (10 * $page) - (10 - 1);
        @endphp
            @foreach ($books as $book)
                 <td>{{ $no++ }}</td>
                 <td>{{ $book->title }}</td>
                 <td>{{ $book->description }}</td>
                 <td>{{ $book->qty }}</td>
                 <td>{{ $book->borrowed_count }}</td>
                 <td>{{ $book->author->name }}</td>
                 <td>
                    <img src={{ $book->getCover() }} height="150px;" alt="{{ $book->title }}">
                 </td>         
            </tbody>
        @endforeach
    </table>
    <!-- paginate --> 
    {{ $books->links() }}
    </div>
  </div>
</div>
@endsection

@push('scripts')

  <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
 
 <!-- alert notifikasi -->
 @include('admin.templates.partials.alerts');

@endpush
