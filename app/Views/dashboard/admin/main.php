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
            <h6 class="m-0 font-weight-bold text-primary">Daftar Proyek</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Owner</th>
                            <th>Nama Proyek</th>
                            <th>Lokasi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_slice($proyek, 0, 3) as $row) : ?>
                            <tr>
                                <td><?= $row['nama_owner'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['lokasi_proyek'] ?></td>
                                <td><?= $row['tgl_mulai'] ?></td>
                                <td><?= $row['tgl_selesai'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('/dashboard/admin/proyek') ?>" class="btn btn-danger">Show More...</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>