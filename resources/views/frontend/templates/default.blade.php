<!DOCTYPE html>
<html lang="en">
  
  <!-- head -->
  @include('frontend.templates.partials.head')

<body>
   
   <!-- navigation --> 
   @include('frontend.templates.partials.navigation')
    
    <!-- content -->
    <div class="container">
       @yield('content')
    </div>

   <!-- pagination -->
 
   <!-- script --> 
    @include('frontend.templates.partials.scripts')
    
    <!-- notifikasi with materialize --> 
    @include('frontend.templates.partials.toast')

</body>
</html>
