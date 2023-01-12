@extends('admin.templates.default')

@section('content')

<div class="card">
  <div class="card-body">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>Id Penulis</th>
              <th>Nama Penulis </th>
              <th>Tindakan</th>
            </tr>
        </thead>
    </table>
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
 
 //alert notifikasi 
 @include('admin.templates.partials.alerts');

<script>
    $(function (){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.author.data') }}",
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'action'},
            ]
        });
    });
  </script>
@endpush
