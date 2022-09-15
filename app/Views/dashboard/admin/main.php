<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Client Project Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Proyek Client</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Owner</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rudi</td>
                            <td>2011/04/25</td>
                            <td>2018/04/26</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bagong</td>
                            <td>2017/09/10</td>
                            <td>2022/09/11</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lita</td>
                            <td>2023/04/05</td>
                            <td>2014/04/06</td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('/dashboard/admin/proyek') ?>" class="btn btn-danger">Show More...</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>