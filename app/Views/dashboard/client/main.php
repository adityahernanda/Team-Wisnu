<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Rincian RAB Card -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Rincian RAB - Rancang Anggaran Belanja </h6>
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
                                            Total Anggaran</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 40,000
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
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 15,000
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
                                            Kekurangan Bayar</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 25,000
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

                <a href="<?= base_url('/dashboard/client/rab') ?>" class="btn btn-danger">Detail RAB</a>

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
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            17/08/2022</div>
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
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            17/08/2024</div>
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
                                                            365 Hari</div>
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
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        Jl. Benih Gg. Biji</div>
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

    <!-- Proyek Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Progress Proyek</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Progress</th>
                            <th>Tanggal Progress</th>
                            <th>Biaya Keluar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pemasangan Ubin Ruang Tamu</td>
                            <td>2011/04/25</td>
                            <td>5.000.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohId') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pemasangan Titik Lampu</td>
                            <td>2022/04/25</td>
                            <td>1.500.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohId') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pengecatan Dinding Kamar Tidur</td>
                            <td>2015/04/25</td>
                            <td>8.000.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohId') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('/dashboard/client/proyek') ?>" class="btn btn-danger">Show More...</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>