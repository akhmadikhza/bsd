</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer bawah">
  <strong>Copyright &copy; 2021 <a href="#" class="text-success">BSD Application</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>


<!-- jQuery -->
<script src="<?= base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Chart-->
<script src="<?= base_url(); ?>assets/admin/plugins/chart.js/Chart.min.js"></script>

<!-- DataTables -->
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?= base_url(); ?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>


<script src="<?= base_url(); ?>assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Select2 -->
<script src="<?= base_url('assets/admin/plugins/select2/js/select2.full.min.js'); ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets/admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js'); ?>"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/admin/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/admin/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/dist/js/demo.js'); ?>"></script>
<!-- Page specific script -->





<script>
  $('.mantap').hide();
</script>

<!-- New Date Picker -->
<script>
  $(function() {

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      format: 'DD/MM/YYYY HH:mm',
      timePicker24Hour: true,
      icons: {

        time: 'far fa-clock',
        timePicker24Hour: true,

      },


    });


  })
</script>



<script>
  $(function() {

    //Date and time picker
    $('#tahap1').datetimepicker({
      format: 'DD/MM/YYYY HH:mm',
      timePicker24Hour: true,
      icons: {

        time: 'far fa-clock',
        timePicker24Hour: true,

      },


    });


  })
</script>



<script>
  $(function() {

    //Date and time picker
    $('#tahap2').datetimepicker({
      format: 'DD/MM/YYYY HH:mm',
      timePicker24Hour: true,
      icons: {

        time: 'far fa-clock',
        timePicker24Hour: true,

      },


    });


  })
</script>

<script>
  $(function() {

    //Date and time picker
    $('#tahap3').datetimepicker({
      format: 'DD/MM/YYYY HH:mm',
      timePicker24Hour: true,
      icons: {

        time: 'far fa-clock',
        timePicker24Hour: true,

      },


    });


  })
</script>


<script>
  $(function() {

    //Date and time picker
    $('#tahap4').datetimepicker({
      format: 'DD/MM/YYYY HH:mm',
      timePicker24Hour: true,
      icons: {

        time: 'far fa-clock',
        timePicker24Hour: true,

      },


    });


  })
</script>



<script>
  $(function() {

    //Date and time picker
    $('#tahap5').datetimepicker({
      format: 'DD/MM/YYYY HH:mm',
      timePicker24Hour: true,
      icons: {

        time: 'far fa-clock',
        timePicker24Hour: true,

      },


    });


  })
</script>


<script>
  $(function() {

    //Date and time picker
    $('#tgl_penerima').datetimepicker({
      format: 'DD/MM/YYYY',
      timePicker24Hour: true,
      icons: {

        time: 'far fa-clock',
        timePicker24Hour: true,

      },


    });


  })
</script>




<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "searching": true,
      "oLanguage": {

        "sSearch": "Cari :"

      },
      "pageLength": 5,
      "ordering": true,
      "lengthChange": false,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "buttons": [{
          text: '<i class="fas fa-copy" </i> Salin',
          extend: "copy",
          exportOptions: {
            columns: 'th:not(:last-child)'
          },
          className: "btn-success mr-2 rounded-pill",
        },


        {
          text: '<i class="fas fa-file-excel" </i> Excel',
          extend: "excel",
          exportOptions: {
            columns: 'th:not(:last-child)'
          },
          className: "btn-success mr-2 rounded-pill",
        },


        {
          text: '<i class="fas fa-print" </i> Cetak',
          extend: "print",
          exportOptions: {
            columns: 'th:not(:last-child)'
          },
          className: "btn-success mr-2 rounded-pill",
        }



      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>














<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>






</body>

</html>