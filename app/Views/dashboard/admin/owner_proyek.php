<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Proyek</h1>
    </div>

    <!-- Owner Proyek Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col d-flex justify-content-start align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Owner Proyek</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Owner</th>
                            <th>Lokasi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Daftar Proyek</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rudi</td>
                            <td>Wiyung</td>
                            <td>2017/04/25</td>
                            <td>2019/04/26</td>
                            <td class="text-center">
                                <a href="<?= base_url('/dashboard/admin/proyek/idOwner') ?>" class="btn btn-primary">Lihat</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bagong</td>
                            <td>Waru Gunung</td>
                            <td>2019/12/15</td>
                            <td>20120/12/16</td>
                            <td class="text-center">
                                <a href="<?= base_url('/dashboard/admin/proyek/idOwner') ?>" class="btn btn-primary">Lihat</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lita</td>
                            <td>Mastrip</td>
                            <td>2021/08/30</td>
                            <td>2022/08/31</td>
                            <td class="text-center">
                                <a href="<?= base_url('/dashboard/admin/proyek/idOwner') ?>" class="btn btn-primary">Lihat</a>
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