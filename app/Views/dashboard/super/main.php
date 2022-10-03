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
            <h6 class="m-0 font-weight-bold text-primary">Jumlah Proyek dan Akun</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <div class="row">

                    <!-- Jumlah Proyek Card -->
                    <div class="col-xl-4 col-md-12 mb-4">
                        <a href="proyekpage.html">
                            <div class="card border-left-primary shadow h-100 py-2 card-custom">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Proyek
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= sizeof($proyek) ?> Proyek
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-collection"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Jumlah Pengawas Card -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a href="manajemenPengguna.html">
                            <div class="card border-left-success shadow h-100 py-2 card-custom">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Pengawas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $admin ?> Pengawas
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Jumlah Client Card -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a href="manajemenPengguna.html">
                            <div class="card border-left-warning shadow h-100 py-2 card-custom">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Client
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $client ?> Client
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div> <!-- Akhir ROW -->

            </div>
        </div>
    </div>

    <!-- Daftar Proyek Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Proyek</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Owner</th>
                            <th>Nama Pengawas</th>
                            <th>Nama Proyek</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_splice($proyek, 0, 3)  as $row) : ?>
                            <tr>
                                <td><?= $row['nama_owner'] ?></td>
                                <td><?= $row['nama_pengawas'] ?></td>
                                <td><?= $row['nama_proyek'] ?></td>
                                <td><?= $row['lokasi_proyek'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('/dashboard/sa/proyek') ?>" class="btn btn-danger">Show More...</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>