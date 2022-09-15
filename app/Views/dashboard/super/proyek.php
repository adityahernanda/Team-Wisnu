<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Proyek <span class="namaUser">Doddy/Lita/Bagong</span>
        </h1>
    </div>

    <!-- Daftar Proyek -->
    <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
        <!-- Proyek Tabel -->
        <div class="card shadow mb-4 gap-3">
            <div class="card-header d-flex justify-content-end">
                <a href="tambahDataProyek.html" class="btn btn-danger">Tambah Proyek</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <tr>
                                <td>1</td>
                                <td>Proyek 1</td>
                                <td>17/07/2022</td>
                                <td>Wiyung</td>
                                <td class="text-center">
                                    <a href="editproyek.html" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('/dashboard/sa/proyek/idOwner/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Proyek 2</td>
                                <td>11/09/2022</td>
                                <td>Waru Gunung</td>
                                <td class="text-center">
                                    <a href="editproyek.html" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('/dashboard/sa/proyek/idOwner/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>