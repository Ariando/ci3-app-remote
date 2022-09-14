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
                    <a href="<?php echo base_url() ?>mahasiswa" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Mahasiswa
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
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Alternatif</li>
                        <li class="breadcrumb-item active">Edit Data Alternatif</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-0 m-0">
                            <?php foreach ($nilai as $nil) { ?>
                                <form method="POST" action="<?= base_url() . 'alternatif/update'; ?>">
                                    <div class="card-body">
                                        <!-- <div class="form-group">
                                            <label for="id_alternatif">Alternatif</label>
                                            <input type="text" class="form-control" name="id_alternatif" id="id_alternatif" value="<?php echo $nil->id_alternatif ?>">
                                        </div> -->
                                        <div class="form-group">
                                            <label for="nilai1">C1</label>
                                            <input type="hidden" name="id_nilai" value="<?php echo $nil->id_nilai ?>">
                                            <input type="text" class="form-control" id="nilai1" name="nilai1" value="<?php echo $nil->nilai1 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai2">C2</label>
                                            <input type="text" class="form-control" id="nilai2" name="nilai2" value="<?php echo $nil->nilai2 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai3">C3</label>
                                            <input type="text" class="form-control" id="nilai3" name="nilai3" value="<?php echo $nil->nilai3 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai4">C4</label>
                                            <input type="text" class="form-control" id="nilai4" name="nilai4" value="<?php echo $nil->nilai4 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai5">C5</label>
                                            <input type="text" class="form-control" id="nilai5" name="nilai5" value="<?php echo $nil->nilai5 ?>">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer col-md-12 mt-md-0">
                                        <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>