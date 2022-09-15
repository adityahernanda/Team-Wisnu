<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Proyek</h1>
    </div>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <!-- Daftar Proyek -->
            <button class="nav-link active" id="nav-daftarProyek-tab" data-toggle="tab" data-target="#nav-daftarProyek" type="button" role="tab" aria-controls="nav-daftarProyek aria-selected=" true">Daftar
                Proyek</button>

            <!-- Riwayat Proyek -->
            <button class="nav-link" id="nav-riwayatProyek-tab" data-toggle="tab" data-target="#nav-riwayatProyek" type="button" role="tab" aria-controls="nav-riwayatProyek" aria-selected="false">Daftar
                Riwayat Proyek</button>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <!-- Daftar Proyek -->
        <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
            <!-- Proyek Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <a href="tambahDataProyek.html" class="btn btn-danger mb-3">Tambah Proyek</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Owner</th>
                                    <th>Pengawas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Doddy</td>
                                    <td>Pak Nanang</td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bagong</td>
                                    <td>Pak Tesa</td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lita</td>
                                    <td>Pak Budi</td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rudi Salim</td>
                                    <td>Pak Tesa</td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Marcel</td>
                                    <td>Pak Nanang</td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Salsa</td>
                                    <td>Pak Budi</td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Riwayat Proyek -->
        <div class="tab-pane fade" id="nav-riwayatProyek" role="tabpanel" aria-labelledby="nav-riwayatProyek-tab">
            <!-- Riwayat Proyek Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Proyek</th>
                                    <th>Owner</th>
                                    <th>Total Pembayaran</th>
                                    <th>Tanggal</th>
                                    <th>Lokasi</th>
                                    <th>Pengawas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rumah Mahal</td>
                                    <td>Rudi Salim</td>
                                    <td>5.000.000</td>
                                    <td>2011/04/25</td>
                                    <td>Wiyung</td>
                                    <td>Pak Tesa</td>
                                    <td>
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rumah Sedang</td>
                                    <td>Sulaiman</td>
                                    <td>25.000.000</td>
                                    <td>2015/04/25</td>
                                    <td>Ketintang</td>
                                    <td>Pak Bowo</td>
                                    <td>
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rumah Murah</td>
                                    <td>Salsa</td>
                                    <td>3.000.000</td>
                                    <td>2022/09/12</td>
                                    <td>Mastrip</td>
                                    <td>Pak Jarwo</td>
                                    <td>
                                        <a href="<?= base_url('/dashboard/sa/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>