<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Proyek</h1>
    </div>

    <!-- Proyek Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col d-flex justify-content-start align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Progress Proyek</h6>
                </div>

                <div class="col d-flex justify-content-end">
                    <a href="tambahProgress.html" class="btn btn-primary"><i class="bi bi-plus-circle" style="font-size: 12px;"></i> Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Progress</th>
                            <th>Tanggal Mulai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pemasangan Ubin Ruang Tamu</td>
                            <td>2017/04/25</td>
                            <td class="text-center">
                                <a href="editProgress.html" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('/dashboard/admin/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cat Tembok Garasi</td>
                            <td>2019/12/15</td>
                            <td class="text-center">
                                <a href="editProgress.html" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('/dashboard/admin/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pengecoran/Dek</td>
                            <td>2021/08/30</td>
                            <td class="text-center">
                                <a href="editProgress.html" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('/dashboard/admin/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>