<!DOCTYPE html>
<html>
<?php
$hitung = $this->Tagihan_model->hitung(); ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jarvis | Aplikasi Pertanahan BPN Kab. Pringsewu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- data table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>



</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-navy navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <img src="<?= base_url() ?>img/logo.png" class="nav-link">
        </li>
        <li class=" nav-item d-none d-sm-inline-block">
          <a class="nav-link">Aplikasi Pendaftaran Tanah BPN Kab. Pringsewu</a>
        </li>


      </ul>


      <!-- SEARCH FORM -->


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Logout</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('warga'); ?>" class="nav-link">Warga</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin'); ?>" class="nav-link">Admin</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <?php
            if ($hitung >= 1) {
            ?>
              <span class="badge badge-warning navbar-badge"><?= $hitung; ?></span>
            <?php } else { ?>
              <span class="badge badge-warning navbar-badge"></span>
            <?php
            } ?>
          </a>
          <!-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>

            <span class="badge badge-warning navbar-badge" id="tot-prod"></span>

          </a>


          <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-wallet mr-2"></i><?= $hitung; ?> Tagihan baru
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>

            <div class="dropdown-divider"></div>

          </div> -->
        </li> -->
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link d-none d-sm-inline-block" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-navy elevation-2">
      <!-- Brand Logo -->

      <a href="<?= base_url() ?>" class="brand-link mx-auto">
        <img src="<?= base_url() ?>img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light small">BPN Kab. Pringsewu</span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>/lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="row">
            <div class="info ml-3">
              <a href="#" class="d-block">Warga</a>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
          <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item text-sm">
              <a href="<?= base_url('warga'); ?>" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p> Menu Utama

                </p>
              </a>
            </li>
            <li class="nav-item text-sm">
              <a href="<?= base_url('warga/profile'); ?>" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p> Profile

                </p>
              </a>
            </li>
            <li class="nav-item text-sm has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>
                  Menu Layanan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item text-sm">
                  <a href="<?= base_url('warga/pendaftaran'); ?>" class="nav-link">
                    <i class="nav-icon fas fa-file-medical"></i>
                    <p> Pendaftaran Sertifikat Baru

                    </p>
                  </a>
                </li>
                <li class="nav-item text-sm">
                  <a href="<?= base_url('warga/pemecahan'); ?>" class="nav-link">
                    <i class="nav-icon fas fa-file-download"></i>
                    <p> Pemecahan Sertifikat

                    </p>
                  </a>
                </li>
                <li class="nav-item text-sm">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-import"></i>
                    <p> Penggabungan Sertifikat

                    </p>
                  </a>
                </li>


              </ul>
            </li>

            <li class="nav-item text-sm">
              <a href="<?= base_url('warga/proses'); ?>" class="nav-link">
                <i class="nav-icon fas fa-spinner"></i>
                <p> Seluruh Progress

                </p>
              </a>
            </li>


            <li class="nav-item text-sm">
              <a href="<?= base_url('warga/tabeltagihan'); ?>" class="nav-link">
                <i class="nav-icon fas fa-wallet"></i>
                <p> Seluruh Tagihan

                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
                  <a href="<?= base_url(); ?>petugas/persil" class="nav-link">
                    <i class="far fa-check-square nav-icon"></i>
                    <p>Daftar Persil Terverifikasi</p>
                  </a>
                </li> -->
          </ul>
          </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->