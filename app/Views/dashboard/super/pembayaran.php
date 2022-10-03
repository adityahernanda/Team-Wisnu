<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pembayaran</h1>
    </div>

    <!-- Daftar Client Pembayaran -->
    <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
        <!-- Client Bayar Tabel -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="proyekTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Owner</th>
                                <th>Nama Pengawas</th>
                                <th>Nama Proyek</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#proyekTable').DataTable({
            ajax: '/action/proyek/get',
            columns: [{
                    data: 'nama_owner'
                },
                {
                    data: 'nama_pengawas'
                },
                {
                    data: 'nama_proyek'
                },
                {
                    data: 'lokasi_proyek'
                },
                {
                    data: 'id_proyek',
                    render: (data) => {
                        return `
                            <a href="<?= base_url('/dashboard/sa/pembayaran') ?>/${data}" class="btn btn-primary">Detail</a>
                        `;
                    }
                },
            ]
        })
    </script>
</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>