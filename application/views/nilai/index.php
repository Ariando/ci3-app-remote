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
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>" class="nav-link">
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
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Kriteria
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?php echo base_url() ?>alternatif" class="nav-link active">
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
                            <a href="#" class="nav-link">
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
                            <a href="#" class="nav-link">
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
                    <h4 class="m-0"><?= $title; ?></h4>
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
                        <div class="card-header mt-0">
                        </div>
                        <div class="card-body p-0 col-md-12">
                            <form method="POST" action="<?= base_url() . 'nilai/update'; ?>">
                                <div class="card-body">
                                    <table class="table table-bordered table-head-fixed table-striped text-nowrap">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Kode </th>
                                                <th>Nama Alternatif</th>
                                                <th>Kriteria C1</th>
                                                <th>Kriteria C2</th>
                                                <th>Kriteria C3</th>
                                                <th>Kriteria C4</th>
                                                <th>Kriteria C5</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                            <tr>
                                                <td style="width: 5%;"><?= $alternatif['kode']; ?></td>
                                                <td><?= $alternatif['nama']; ?></td>
                                                <td style="width: 10%;"><input type="text" class="form-control" value="<?= $nilai['nilai1']; ?>"></td>
                                                <td style="width: 10%;"><input type="text" class="form-control" value="<?= $nilai['nilai2']; ?>"></td>
                                                <td style="width: 10%;"><input type="text" class="form-control" value="<?= $nilai['nilai3']; ?>"></td>
                                                <td style="width: 10%;"><input type="text" class="form-control" value="<?= $nilai['nilai4']; ?>"></td>
                                                <td style="width: 10%;"><input type="text" class="form-control" value="<?= $nilai['nilai5']; ?>"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer col-md-12 mt-md-0">
                                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                        </div>

                        <!-- /. card footer -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>