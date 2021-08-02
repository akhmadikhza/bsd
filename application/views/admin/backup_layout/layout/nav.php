<?php

$user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

// $get_info = $this->vote_model->get_akun()->result_array();
// $get_all = $this->vote_model->getAll();


// $get_vote = $this->dashboard_model->get_totalvote()->result_array();



?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin/route'); ?>" class="brand-link">
    <img src="<?= base_url('assets/image/hand.jpg'); ?>" alt="BSD Application" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">BSD Application</span>
  </a>


  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/image/profile/thumbs/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image" style="height: 45px;">
      </div>
      <div class="info">
        <a href="<?= base_url('admin/route'); ?>" class="d-block"><?= $user['name']; ?></a>
      </div>

    </div>




    <!-- Sidebar Menu -->
    <nav class="mt-2 ">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        <li class="nav-item">
          <a href="<?= base_url('admin/route'); ?>" class="nav-link">
            <i class="far fas fa-tachometer-alt nav-icon"></i>
            <p>Dashboard</p>
          </a>
        </li>



        <!-- Data Penerima -->


        <li class="nav-item">
          <a href="<?= base_url('admin/penerima'); ?>" class="nav-link">
            <i class="far fas fa-hand-holding-heart nav-icon"></i>
            <p>Data Penerima</p>
          </a>
        </li>

        <!-- End Data Penerima -->


        <!-- Start Pengajuan -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit nav-icon"></i>
            <p>
              Pengajuan UMKM
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">


            <?php if ($user['role_id'] == 2) { ?>
              <li class="nav-item">
                <a href="<?= base_url('admin/pengajuan/tambah'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Bantuan</p>
                </a>
              </li>
            <?php } ?>


            <?php if ($user['role_id'] == 1) { ?>
              <li class="nav-item">
                <a href="<?= base_url('admin/pengajuan/admin_page'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Status Bantuan</p>
                </a>
              </li>

            <?php } ?>


            <?php if ($user['role_id'] == 2) { ?>
              <li class="nav-item">
                <a href="<?= base_url('admin/pengajuan'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status Bantuan</p>
                </a>
              </li>
            <?php } ?>


          </ul>
        </li>




        <!-- End Pengajuan -->




        <!-- Start Statistik -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Statistic
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/statistic'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>See Statistic</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- End Statistik -->



        <?php if ($user['role_id'] == 1) { ?>
          <!-- Start Classs -->

          <li class="nav-item">
            <a href="<?= base_url('admin/bantuan'); ?>" class="nav-link">
              <i class="far fas fa-people-carry nav-icon"></i>
              <p>Jenis Bantuan</p>
            </a>
          </li>

          <!-- End Class -->
        <?php } ?>



        <!-- Start Edit Profile -->

        <li class="nav-item">
          <a href="<?= base_url('admin/profile'); ?>" class="nav-link">
            <i class="far fas fa-user-cog nav-icon"></i>
            <p>Edit Profile</p>
          </a>
        </li>
        <!-- Edit Profile -->


        <!-- Start Change Password -->



        <li class="nav-item">
          <a href="<?= base_url('admin/profile/changepassword'); ?>" class="nav-link">
            <i class="far fas fa-key nav-icon"></i>
            <p>Change Password</p>
          </a>
        </li>

        <!-- End Change Password -->




        <?php if ($user['role_id'] == 1) { ?>
          <!-- Menu Administrator Hanya Admin yang bisa akses page ini-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                User Administrator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?= base_url('admin/user_list'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Administrator</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/user_list/user_token'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Token</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/history'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>History</p>
                </a>
              </li>




            </ul>
          </li>
          <!-- End Menu Administrator -->
        <?php } ?>




        <!-- Menu Logout Admin -->
        <li class="nav-item">
          <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
            <i class="far fas fa-sign-out-alt  nav-icon"></i>
            <p>Logout</p>
          </a>
        </li>
        <!--  End Menu Logout Admin -->




      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content mt-3">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <p class="card-title font-weight-bold"><?= $title; ?></p>
          </div>
          <!-- /.card-header -->
          <div class="card-body">