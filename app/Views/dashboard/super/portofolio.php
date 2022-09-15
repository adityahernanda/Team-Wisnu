<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portofolio</h1>
    </div>

    <!-- Daftar Portofolio Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <div>
                <h6 class="m-0 font-weight-bold text-primary">Daftar Portofolio</h6>
            </div>

            <div>
                <a href="tambahPortofolio.html" class="btn btn-danger">
                    <i class="bi bi-plus-circle" style="font-size: 14px;"></i>
                    Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="<?= base_url('assets/img/portofolio 1.jpg') ?>" width="100" height="100" alt="">
                            </td>
                            <td>Hunian Rumah</td>
                            <td>
                                <a href="editPortofolio.html" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="<?= base_url('assets/img/portofolio 2.jpg') ?>" width="100" height="100" alt="">
                            </td>
                            <td>Cafe Blara</td>
                            <td>
                                <a href="editPortofolio.html" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <img src="<?= base_url('assets/img/portofolio 3.jpg') ?>" width="100" height="100" alt="">
                            </td>
                            <td>Gedung Perkantoran</td>
                            <td>
                                <a href="editPortofolio.html" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
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