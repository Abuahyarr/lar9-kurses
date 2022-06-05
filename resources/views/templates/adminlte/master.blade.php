<?php $loggedinInfo = auth()->user(); ?>

<!DOCTYPE html>
<html>

<head>
  @include('templates/adminlte/meta')
  @include('templates/adminlte/head')
  
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('templates/adminlte/navigation')

    <div class="content-wrapper">
      @yield('content')
    </div>

    @include('templates/adminlte/footer')

  </div>
  @include('templates/adminlte/foot')

</body>

</html>