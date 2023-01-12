<button href="{{ route('admin.borrow.return', $model) }}"
    class="btn btn-info" id="return">
      <img class="img-fluid" src="{{ asset('images/edit.png') }}" alt="" style="width:20px;">
    Pengembalian Buku
    </button>

<!-- sweat alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('button#return').on('click', function(e){
         e.preventDefault();

         var href = $(this).attr('href');

         //sweat alert
         Swal.fire({
            title: 'Apakah Kamu Yakin Data Buku ini Sudah Benar ? ',
            text: "Pastikan bahwa data buku yang dikembalikan sudah benar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Betul Data Buku Sudah dicek dan Benar'
          }).then((result) => {
            if (result.isConfirmed) {

              document.getElementById('returnForm').action = href;
              document.getElementById('returnForm').submit();

              Swal.fire(
                'Dikembalikan!',
                'Buku Sudah dikembalikan!',
                'success'
              )
            }
          });
   });
</script>

