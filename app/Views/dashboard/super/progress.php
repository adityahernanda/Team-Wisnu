<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Progress Harian Proyek</h1>
    </div>

    <!-- Daftar Progress Harian Proyek -->
    <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
        <!-- Progress Proyek Harian Tabel -->
        <div class="card shadow mb-4 gap-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Progress</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Progress 1</td>
                                <td>17/07/2022</td>
                                <td>Pemasangan Tandon</td>
                                <td class="text-center">
                                    <a href="editproyek.html" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('/dashboard/sa/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Progress 2</td>
                                <td>11/09/2022</td>
                                <td>Ganti talang air</td>
                                <td class="text-center">
                                    <a href="editproyek.html" class="btn btn-warning">Edit</a>
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
<!-- /.container-fluid -->
<?= $this->endSection() ?>