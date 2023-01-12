<script>

    @if (session('success'))
       $.notify({
	    // options
	    message: '{{ session('success') }}' 
    },{
	     // settings
        element: 'body',
	    position: null,
	    type: 'success',
        placement: { align: "right", from: 'top', }, 
        offset: { x: 30, y: 60 }  
    }); 
    @endif()

    @if (session('info'))
    $.notify({
	    // options
	    message: '{{ session('info') }}' 
    },{
	     // settings
        element: 'body',
	    position: null,
	    type: 'info',
        delay: 5000,
	    timer: 1000,
        placement: { align: "right", from: 'top', }, 
        offset: { x: 30, y: 60 } 
    });
    @endif()

    @if (session('danger'))
     $.notify({
	    // options
	    message: '{{ session('danger') }}' 
    },{
	    // settings
        element: 'body',
	    position: null,
	    type: 'danger',
        placement: { align: "right", from: 'top', }, 
        offset: { x: 30, y: 60 } 
    });
    @endif()

</script>