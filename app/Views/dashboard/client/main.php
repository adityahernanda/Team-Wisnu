<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <select id="proyekFilter" class="form-control col-12 col-md-4">
            <?php foreach ($proyek as $row) : ?>
                <option value="<?= $row['id_proyek'] ?>"><?= $row['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- Rincian Pembayaran Card -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Rincian Pembayaran</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <div class="row">

                    <!-- Total Anggaran Card -->
                    <div class="col-xl-4 col-md-12 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2 card-custom">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Anggaran
                                        </div>
                                        <div id="anggaran" class="h5 mb-0 font-weight-bold text-gray-800">

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sudah Bayar Card -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2 card-custom">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Sudah Terbayar</div>
                                        <div id="terbayar" class="h5 mb-0 font-weight-bold text-gray-800">

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-cash-coin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kurang Bayar Card -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2 card-custom">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Kekurangan Bayar
                                        </div>
                                        <div id="kekurangan" class="h5 mb-0 font-weight-bold text-gray-800">

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- Akhir ROW -->

                <a href="<?= base_url('/dashboard/client/pembayaran') ?>" class="btn btn-danger">Detail Pembayaran</a>

            </div>
        </div>
    </div>

    <!-- Proyek Card-->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample2">
            <h6 class="m-0 font-weight-bold text-primary">Proyek</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample2">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12">
                        <h4>Tanggal Kerja</h4>
                        <div class="row">
                            <!-- Tanggal Mulai Card -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2 card-custom">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tanggal Mulai Kerja
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div id="tglMulai" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="bi bi-calendar-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Tanggal Mulai Card -->

                            <!-- Tanggal Berakhir Card -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-bottom-danger shadow h-100 py-2 card-custom">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    Tanggal Berakhir Kerja
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div id="tglAkhir" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="bi bi-calendar2-x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Tanggal Berakhir Card -->

                            <!-- Sisa Hari Card -->
                            <div class="col-xl-4 col-md-12 mb-4">
                                <div class="card border-bottom-info shadow h-100 py-2 card-custom">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Sisa Hari
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <span id="sisa"></span> Hari
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="bi bi-stopwatch"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Sisa Hari Card -->

                        </div>

                    </div>

                    <div class="col-xl-12">
                        <h4>Lokasi</h4>
                        <!-- Lokasi Card -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-bottom-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div id="lokasi" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-pin-map"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Lokasi Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Proyek -->
    <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">

        <!-- Proyek Tabel -->
        <div class="card shadow mb-4 gap-3">
            <div class="card-header">
                Daftar Proyek
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Proyek</th>
                                <th>Tanggal</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach (array_slice($proyek, 0, 3) as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['tgl_mulai'] ?></td>
                                    <td><?= $row['lokasi_proyek'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/dashboard/client/proyek/' . $row['id_proyek']) ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <a href="<?= base_url('/dashboard/client/proyek') ?>" class="btn btn-danger">Show More...</a>
            </div>
        </div>

    </div>
    <script src="<?= base_url('/assets/js/client/main.js') ?>" type="module"></script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>