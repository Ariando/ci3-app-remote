<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
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
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SAW</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>WP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6">
                    <h4 class="mb-0">Data Mahasiswa</h4>
                    <button type="button" class="btn btn-info float-left btn-flat mt-3" data-toggle="modal" data-target="#modal-default">Tambah Data Mahasiswa
                    </button>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card px-2">
                        <div class="card-header mt-0">
                        </div>
                        <div class="card-body p-0 col-md-12">
                            <table class="table table table-head-fixed text-nowrap table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Alamat</th>
                                        <th colspan="3" width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($mahasiswa as $mhs) :
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $mhs->nama ?></td>
                                            <td><?= $mhs->nim ?></td>
                                            <td><?= $mhs->alamat ?></td>
                                            <td><?= anchor('mahasiswa/detail/' . $mhs->id, '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1"><i class="fa fa-info-circle"></i></button>'); ?>
                                            </td>
                                            <td><?= anchor('mahasiswa/edit/' . $mhs->id, '<button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>') ?></td>
                                            <td><?= anchor('mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                        </div>
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Form Tambah data Mahasiswa</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card card-primary">
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <form method="POST" action="<?php echo base_url() . 'mahasiswa/tambah_data'; ?>">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Mahasiswa</label>
                                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nim">NIM</label>
                                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="masukkan nim" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5" placeholder="masukkan alamat" value=""></textarea>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                    <button type="reset" value="Reset" class="btn btn-danger btn-outline-light">Reset</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /. card footer -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>