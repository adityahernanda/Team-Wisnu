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
                Proyek
            </button>

            <!-- Riwayat Proyek -->
            <button class="nav-link" id="nav-riwayatProyek-tab" data-toggle="tab" data-target="#nav-riwayatProyek" type="button" role="tab" aria-controls="nav-riwayatProyek" aria-selected="false">Daftar
                Riwayat Proyek
            </button>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
            <!-- Owner Proyek Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="proyekTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Owner</th>
                                    <th>Nama Proyek</th>
                                    <th>Lokasi</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-riwayatProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
            <!-- Owner Proyek Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="riwayatTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Owner</th>
                                    <th>Nama Proyek</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#proyekTable').DataTable({
            ajax: {
                url: '/action/proyek/admin',
                type: 'POST',
                data: {
                    id: '<?= $_SESSION['id'] ?>'
                }
            },
            columns: [{
                    data: 'nama_owner'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'lokasi_proyek'
                },
                {
                    data: 'tgl_mulai'
                },
                {
                    data: 'tgl_selesai'
                },
                {
                    data: 'id_proyek',
                    render: (data) => {
                        return `
                            <td class="text-center">
                                <a href="<?= base_url('/dashboard/admin/proyek') ?>/${data}" class="btn btn-primary">Lihat</a>
                            </td>
                        `;
                    }
                },
            ]
        });

        $('#riwayatTable').DataTable({
            ajax: {
                url: '/action/proyek/admin',
                type: 'POST',
                data: {
                    id: '<?= $_SESSION['id'] ?>',
                    status: 'selesai'
                }
            },
            columns: [{
                    data: 'nama_owner'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'lokasi_proyek'
                },
                {
                    data: 'status'
                },
                {
                    data: 'id_proyek',
                    render: (data) => {
                        return `
                            <td class="text-center">
                                <a href="<?= base_url('/dashboard/admin/proyek') ?>/${data}" class="btn btn-primary">Lihat</a>
                            </td>
                        `;
                    }
                },
            ]
        });
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>