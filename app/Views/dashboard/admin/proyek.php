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
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Proyek</h6>
                </div>
            </div>
        </div>
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
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>