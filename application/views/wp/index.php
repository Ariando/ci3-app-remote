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
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>alternatif" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Data Alternatif
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
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
                            <a href="<?= base_url() ?>wp" class="nav-link  active">
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

                    <!-- Data Bobot riteria -->
                    <div class="card px-2">
                        <div class="card-header">
                            <h3 class="card-title">
                                Data Bobot
                            </h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped text-nowrap table-head-fixed">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>Nama Kriteria</th>
                                        <?php foreach ($nama_k as $nm) : ?>
                                            <th style="width: 15%;"><?= ucfirst($nm->nama); ?></th>
                                        <?php endforeach; ?>
                                        <th style="width: 2%;">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr>
                                        <td>Bobot Kriteria</td>
                                        <!-- menampilkan bobot setiap kriteria -->
                                        <?php foreach ($bobot as $bt) : ?>
                                            <td><?= $bt->bobot; ?></td>
                                        <?php endforeach ?>
                                        <!-- menampilkan jumlah bobot -->
                                        <?php foreach ($bobot_max as $btm)  ?>
                                        <td><?= $btm->bobot; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- normalisasi bobot -->
                    <div class="card px-2">
                        <div class="card-header">
                            <h3 class="card-title">Normalisasi Bobot</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-head-fixed table-striped text-nowrap">
                                <thead style="text-align: center;">
                                    <tr>
                                        <!-- menampilkan baris kode kriteria -->
                                        <?php foreach ($kode_k as $kk) : ?>
                                            <th><?= $kk->kode; ?></th>
                                        <?php endforeach ?>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr>
                                        <!-- menampilkan bobot ternormalisasi/normalisasi bobot -->
                                        <?php
                                        foreach ($bobot as $bb) :
                                            $bk = $bb->bobot;
                                            $bx = $btm->bobot;
                                            $bbt[] = $bb->bobot / $btm->bobot;
                                        ?>
                                            <td><?= $bk / $bx; ?></td>
                                        <?php endforeach; ?>
                                        <td><?= array_sum($bbt); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <small><em>Jumlah harus bernilai 1</em></small>
                        </div>
                    </div>
                    <!-- penilaian alternatf -->
                    <div class="card px-2">
                        <div class="card-header">
                            <h3 class="card-title">Rating Kecocokan Alternatif dan Kriteria</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-head-fixed text-nowrap">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th colspan="2">Alternatif</th>
                                        <th colspan="5">Kriteria</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 2%;">Kode</th>
                                        <th style="width: 5%;">Nama</th>
                                        <?php foreach ($nama_k as $nm) : ?>
                                            <th style="width: 5%;"><?= ucfirst($nm->nama);  ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php foreach ($nilai as $n) : ?>
                                        <tr>
                                            <td><?= $n['kode']; ?></td>
                                            <td><?= $n['nama']; ?></td>
                                            <td><?= $n['nilai1']; ?></td>
                                            <td><?= $n['nilai2']; ?></td>
                                            <td><?= $n['nilai3']; ?></td>
                                            <td><?= $n['nilai4']; ?></td>
                                            <td><?= $n['nilai5']; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Menghitung Vektor S -->
                    <div class="card px-2">
                        <div class="card-header">
                            <h3 class="card-title">
                                Menghitung Vektor S
                            </h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-head-fixed table-striped text-nowrap">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th style="width: 2%;">Kode</th>
                                        <?php foreach ($kriteria as $kr) :
                                            $no = 1;
                                        ?>
                                            <th><?= $kr->kode; ?></th>
                                        <?php endforeach; ?>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php
                                    foreach ($nilai as $n) :
                                        $h1 = pow($n['nilai1'], $bbt[0]);
                                        $h2 = pow($n['nilai2'], $bbt[1]);
                                        $h3 = pow($n['nilai3'], $bbt[2]);
                                        $h4 = pow($n['nilai4'], $bbt[3]);
                                        $h5 = pow($n['nilai5'], $bbt[4]);
                                        $tot = round(($h1 * $h2 * $h3 * $h4 * $h5), 4);
                                        $records[] = array('nama' => $n['nama'], 'jumlah' => $tot);
                                        $j[] = ($tot);
                                        $x = array_sum($j);
                                    ?>
                                        <tr>
                                            <td>S<?= $no++ ?></td>
                                            <td><?= round($h1, 4); ?></td>
                                            <td><?= round($h2, 4); ?></td>
                                            <td><?= round($h3, 4); ?></td>
                                            <td><?= round($h4, 4); ?></td>
                                            <td><?= round($h5, 4); ?></td>
                                            <td><?= round($tot, 4); ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- menghitung vektor V -->
                    <div class="card px-2">
                        <div class="card-header">
                            <h3 class="card-title">
                                Menghitung Vektor V
                            </h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-head-fixed table-striped text-nowrap">
                                <thead style="text-align: center;">
                                    <?php $no = 1; ?>
                                    <tr>
                                        <th style="width: 2%;">No</th>
                                        <th>Alternatif</th>
                                        <th>Nilai Vektor V</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php foreach ($records as $data) :
                                    ?>
                                        <tr>
                                            <td>V<?= $no++; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= round($data['jumlah'] / $x, 4); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>