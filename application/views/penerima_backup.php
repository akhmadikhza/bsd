<!DOCTYPE html>
<html>

<head>
    <meta name="google-site-verification" content="fioX8wIYTuB26U2zDusK5qWYqWLgJPUcWNPCljxmVwc" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <meta name="description" content="BSD Application 2021">
    <!-- Keywords -->
    <meta name="keywords" content="Login Page,BSD Application ">
    <!-- Author -->
    <meta name="author" content="Login Page">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="http://bsd.ipnuippnumernek.com/assets/favicon/favicon.ico">
    <meta property="og:site_name" content="http://bsd.ipnuippnumernek.com/" />


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/favicon/favicon.ico'); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/favicon/favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png'); ?>">


    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS SELECT -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/daterangepicker/daterangepicker.css'); ?>">


    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins2/select2/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins2/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">



    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">

    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css'); ?>">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/bs-stepper/css/bs-stepper.min.css'); ?>">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/dropzone/min/dropzone.min.css'); ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

    <link href="<?= base_url(''); ?>assets/css/style.css" rel="stylesheet" />



    <!-- CKEDITOR -->




    <script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>





    <link href="<?= base_url(); ?>assets/codesnippet/lib/highlight/styles/monokai_sublime.css" rel="stylesheet">







    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css"> -->
    <!-- End Filter Date -->


    <style>
        .footer {
            background-color: #28a745;
            padding: 20px;
            margin-top: 20px;
        }

        .footer-p {
            margin-top: 40px;
            margin-left: 10px;
        }


        /*DESKTOP VERSION*/

        @media (min-width: 992px) {


            .footer {
                background-color: #28a745;
                padding-bottom: 40px;
                margin-top: 10px;
            }

            .footer-p {
                margin-left: 100px;
            }
        }
    </style>

</head>


<body class="hold-transition sidebar-mini">


    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <img src="assets/image/hand.jpg" class="rounded-circle" width="40" height="40" class="d-inline-block align-top" alt="">
            <a class="navbar-brand text-light" href="#">Bantuan Sosial Desa (BSD) Application </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <div class="navbar-nav ml-auto">
                    <a class="nav-link active text-white" href="<?= base_url('penerima'); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link text-white" href="<?= base_url('auth/registration'); ?>">Pengajuan UMKM</a>
                    <a class="nav-link text-white" href="<?= base_url('auth'); ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>




    <div class="container">



        <!-- Start -->
        <div class="row no-gutters">

            <div class="rounded-0 card-group no-gutters">
                <div class=" col-lg-12">


                    <a href=""> <img src="<?= base_url('assets/image/sokawera.jpg'); ?>" class="card-img-top mt-2" width="500px" height="600px" alt=""></a>






                </div>

            </div>
        </div>

        <!-- End -->





        <!-- <div class="col-lg-5"> -->
        <!-- Content Wrapper. Contains page content -->

        <section class="content mt-3">

            <div class="container-fluid">


                <!-- /.card-header -->
                <div class="card-body">


                    <p class="card-title font-weight-bold"><?= $title; ?></p>
                    <br>



                    <?php foreach ($receiver as $row) :

                        $kat_id = $row['id_bantuan'];
                        $sql2 = $this->db->query("SELECT * FROM penerima WHERE id_bantuan='$kat_id' ORDER BY id_penerima DESC  ;");

                    ?>
                        <p class="mt-3"><a href="#" class="text-white bg-success p-2 font-weight-bolder"><?= $row['nama_bantuan']; ?></a></p>


                        <table id="example2" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Tanggal Penerimaan</th>

                                </tr>
                            </thead>




                            <tbody>


                                <?php $i = 1;
                                foreach ($sql2->result_array() as $user) { ?>



                                    <tr>
                                        <td><?= $i ?></td>

                                        <!-- <td><?= $user['kk']; ?></td>
                                <td><?= $user['nik']; ?></td> -->
                                        <td><?= $user['nama_penerima']; ?></td>
                                        <td><?= $user['alamat']; ?></td>
                                        <td><?= $user['jk']; ?></td>
                                        <td><?= $user['pekerjaan']; ?></td>
                                        <td><?= $user['tgl_penerima']; ?></td>





                                    </tr>



                                <?php $i++;
                                } ?>




                            </tbody>

                        </table>
                    <?php endforeach; ?>

                </div>
            </div>


        </section>


        <!-- <footer class="text-center">
            <strong>Copyright &copy; 2021 <a href="#" class="text-success">BSD Application.</a></strong>
        </footer> -->










    </div>


    <div class="footer">

        <div class="row d-flex justify-content-around" style="margin-top: 20px;">
            <div class="container">
                <div class="col-lg-6">
                    <img src="assets/image/hand.jpg" class="rounded-circle mb-2" width="100" height="100" class="d-inline-block align-top" alt="">
                    <p style="color: white;font-size: 20px;" class="">BSD Application &copy; 2021 </p>
                    <p style="color: white" class=""><i class="fa fa-map-marker" style="color: red" aria-hidden="true"></i> Address: Jalan Raya Sokawera No.2 Kec. Padamara Kab. Purbalingga</p>
                    <p style="color: white" class=""><i class="fa fa-phone" aria-hidden="true"></i> Telepon: 083104835777</p>
                    <p style="color: white;" class=""><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: sokawera2020@gmail.com</p>








                </div>
                <p style="color: white; font-size: 14px;" class="footer-p text-center">Copyright&copy;BSD Application 2021. All Rights Reserved.</p>
            </div>

        </div>



    </div><!-- Footer -->

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









    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "pageLength": 2,
                "searching": false,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "buttons": [{
                        text: '<i class="fas fa-copy" </i> Copy',
                        extend: "copy",
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        },
                        className: "btn-success mr-2 rounded-pill",
                    },


                    {
                        text: '<i class="fas fa-file-csv" </i> Csv',
                        extend: "csv",
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
                        text: '<i class="fas fa-file-pdf" </i> Pdf',
                        extend: "pdf",
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        },
                        className: "btn-success mr-2 rounded-pill",
                    },

                    {
                        text: '<i class="fas fa-print" </i> Print',
                        extend: "print",
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        },
                        className: "btn-success mr-2 rounded-pill",
                    }



                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "pageLength": 10,
                "searching": false,
                "ordering": false,
                "info": false,
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