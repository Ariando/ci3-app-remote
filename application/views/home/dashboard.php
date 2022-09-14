<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SPK</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="<?php echo base_url() ?>" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>mahasiswa" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data Mahasiswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>kriteria" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Kriteria
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>alternatif" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Data Alternatif
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-laptop"></i>
            <p>
              Metode SPK
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url() ?>saw" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>SAW</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>wp" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>WP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>topsis" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>TOPSIS</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- header content -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-6">
          <h4 class="m-0">Dashboard</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- body content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card px-2">
            <div class="card-body">
              <div class="col-md-12 text-center">
                <h1>Aplikasi Perbandingan Metode SPK</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>