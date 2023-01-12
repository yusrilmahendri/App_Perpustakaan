@extends('admin.templates.default')

@section('content')
<div class "card">
 <div class="card-body">
  <div class="box">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>Kode Buku</th>
              <th>Judul Buku</th>
              <th>Nama Penulis</th>
              <th>Stock Buku</th>
              <th>Deskripsi</th>
              <th>Sampul</th>
              <th>Action</th>
            </tr>
        </thead>
    </table>
    </div>
  </div>
</div>

     <!-- trigger pada menghapus data pengguna -->
    <form action="" method="post" id="deleteForm">
             @csrf
             @method("DELETE")
             <input type="submit" value="Hapus"
             style="display: none ">
    </form>
@endsection

@push('scripts')

  <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
 
 <!-- alert notifikasi -->
 @include('admin.templates.partials.alerts');

  <script>
    $(function (){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.book.data') }}",
            columns: [
                {data: 'id'},
                {data: 'title'},
                {data: 'author'},
                {data: 'qty'},
                {data: 'description'},
                {data: 'cover'},
                {data: 'action'},
            ]
        });
    });
  </script>
@endpush
