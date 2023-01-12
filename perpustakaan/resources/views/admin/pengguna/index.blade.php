@extends('admin.templates.default')

@section('content')

<div class="card">  
 <div class="card-body">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>Id Pengguna</th>
              <th>Nama Pengguna </th>
              <th>Email Pengguna</th>
              <th>Tindakan</th>
            </tr>
        </thead>
    </table>
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
  <script>
    $(function (){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.pengguna.data') }}",
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'action'},
            ]
        });
    });
  </script>
@endpush
