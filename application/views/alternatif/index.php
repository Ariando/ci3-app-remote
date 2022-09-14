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
                    <a href="<?php echo base_url() ?>kriteria" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Kriteria
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
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
                            <a href="<?= base_url(); ?>saw" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SAW</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>wp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>WP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>topsis" class="nav-link">
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

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6">
                    <h4 class="mb-0">Data Alternatif</h4>
                    <button type="button" class="btn btn-info float-left btn-flat mt-3" data-toggle="button" aria-pressed="false"">Tambah Data Alternatif
                    </button>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    <section class=" content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card px-2">
                                        <div class="card-header mt-0">
                                        </div>
                                        <div class="card-body p-0 col-md-12">
                                            <table class="table table-head-fixed text-nowrap table-striped table-bordered">
                                                <thead style="text-align: center;">
                                                    <tr>
                                                        <th style="width: 5%;">#</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>C1</th>
                                                        <th>C2</th>
                                                        <th>C3</th>
                                                        <th>C4</th>
                                                        <th>C5</th>
                                                        <th colspan="2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($join_alter_nilai as $rows) :
                                                    ?>
                                                        <tr style="text-align: center;">
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $rows->kode ?></td>
                                                            <td><?= $rows->nama ?></td>
                                                            <td><?= $rows->nilai1 ?></td>
                                                            <td><?= $rows->nilai2 ?></td>
                                                            <td><?= $rows->nilai3 ?></td>
                                                            <td><?= $rows->nilai4 ?></td>
                                                            <td><?= $rows->nilai5 ?></td>
                                                            <td><?= anchor('alternatif/edit/' . $rows->id_alternatif, '<button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>'); ?></td>
                                                            <td><?= anchor('alternatif/hapus/' . $rows->id_alternatif, '<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>'); ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <div class="card-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                </div>