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
                <table class="table table-bordered" id="progressTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Progress</th>
                            <th>Tanggal Mulai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    $uri = service('uri');
    $idProyek = $uri->getSegment(4);
    ?>
    <script>
        $('#progressTable').DataTable({
            ajax: {
                url: '/action/progress',
                type: 'POST',
                data: {
                    id: '<?= $idProyek ?>'
                }
            },
            columns: [{
                    data: "nama"
                },
                {
                    data: "tgl_progress"
                },
                {
                    data: "id_progress",
                    render: (data) => {
                        return `
                            <td class="text-center">
                                <a href="editProgress.html" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('/dashboard/admin/proyek/' . $idProyek) ?>/${data}" class="btn btn-primary">Details</a>
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