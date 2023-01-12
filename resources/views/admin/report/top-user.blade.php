@extends('admin.templates.default')

@section('content')
<div class "card">
 <div class="card-body">
  <div class="box">
    <table  class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Jumlah Peminjaman</th>
              <th>Bergabung</th>
            </tr>
        </thead>
 
        <tbody>
        <!-- penomoran -->
        <?php 
           $page = 1;
           if(request()->has('page')){
               $page = request('page');
           }
           $no = (10 * $page) - (10 - 1);
        ?>
            @foreach ($users as $user)
                 <td>{{ $no++ }}</td>
                 <td>{{ $user->name }}</td>
                 <td>{{ $user->email }}</td>
                 <td>{{ $user->borrow_count }}</td>
                 <td>{{ $user->created_at->diffForHumans() }}</td>    
            </tbody>
        @endforeach
    </table>
    <!-- paginate --> 
    {{ $users->links() }}
    </div>
  </div>
</div>
@endsection

@push('scripts')

  <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
 
 <!-- alert notifikasi -->
 @include('admin.templates.partials.alerts');

@endpush
