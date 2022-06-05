  <!-- jQuery -->
  <script src="{{url('t_adminlte3/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{url('t_adminlte3/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{url('t_adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- SweetAlert2 -->
  <script src="{{ url('t_adminlte3') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- ChartJS -->
  <script src="{{url('t_adminlte3/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{url('t_adminlte3/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{url('t_adminlte3/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{url('t_adminlte3/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{url('t_adminlte3/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{url('t_adminlte3/plugins/moment/moment.min.js')}}"></script>
  <script src="{{url('t_adminlte3/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{url('t_adminlte3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{url('t_adminlte3/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{url('t_adminlte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('t_adminlte3/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="{{url('t_adminlte3/dist/js/pages/dashboard.js')}}"></script> -->
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="{{url('t_adminlte3/dist/js/demo.js')}}"></script> -->
  <!-- Nama Upload File -->
  <script src="{{ url('t_adminlte3') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });

    $('.confirmation').on('click', function (e) {
      $flag = $(this).attr('data-flag');
      $action = $(this).attr("data-action");
      $controller = $(this).attr("data-controller");
      $record_id = $(this).attr("data-id");
      if($flag == 0){
        e.preventDefault();

        Swal.fire({
          title: "Konfirmasi", //"Confirmation",
          text: "Anda akan melakukan "+$action+" data. Eksekusi?",
          icon: "warning",
          showCancelButton: true,
          cancelButtonText: "Batal",
          confirmButtonText: 'Ya, Eksekusi!'
        }).then((result) => {
            
          if(result.value){
            if($controller !== null){
              // console.log($controller+$record_id);
              window.location.href = $controller+$record_id;
            }else{
              $('.confirmation').attr('data-flag', '1');
              $('.myform').submit();
            }
            
          }
        });
      }
      
    });

    $('.confirmBeforePost').on('click', function (e) {
      e.preventDefault();
      var form = $(this).parents('form');
      Swal.fire({
        title: "Konfirmasi", //"Confirmation",
        text: "Anda akan melakukan update data. Eksekusi?",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "Batal",
        confirmButtonText: 'Ya, Eksekusi!'
      }).then((result) => {
        if(result.value){
          // alert(111);
          form.submit();
          // Swal.fire('Saved!', '', 'success');
        };
      });
      
    });

  </script>

  <!-- Custom Javascript File -->
  @yield('jsFile')

  <!-- Custom Script File -->
  @stack('scripts')
