<!DOCTYPE html>
<html lang="en">

 <!-- script css -->
 @include('admin.templates.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- NAVBAR -->
  @include('admin.templates.partials.navbar')

  <!-- LEFT SIDEBAR -->
  @include('admin.templates.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  {{ Breadcrumbs::current()->title }} </h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="active">
                 {{ Breadcrumbs::render() }}
               <li>
            </ol>
          </div>
        </div>
      </div>
    </div>

          <!-- main section -->
      <section class="content">
          @yield('content')
      </section>
    </div>


    <!-- footer -->
     @include('admin.templates.partials.footer')

  <!-- script js dan jquery -->
  @include('admin.templates.partials.scripts')

</body>
</html>
