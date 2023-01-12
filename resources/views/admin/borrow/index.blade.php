@extends('admin.templates.default')

@section('content')

<div class="card">
  <div class="card-body">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>Kode Pinjam </th>
              <th>Nama</th>
              <th>Judul Buku</th>
              <th>Tindakan</th>
            </tr>
        </thead>
    </table>
  </div>
</div>


     <!-- trigger pada menghapus data pengguna -->
    <form action="" method="post" id="returnForm">
             @csrf
             @method("PUT")
             <input type="submit" value="Return"
             style="display: none ">
    </form>
@endsection

@push('scripts')

<script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
 
 //alert notifikasi 
 @include('admin.templates.partials.alerts');

<script>
    $(function (){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.borrow.data') }}",
            columns: [
                {data: 'id'},
                {data: 'user'},
                {data: 'book_title'},
                {data: 'action'},
            ]
        });
    });
  </script>
@endpush
