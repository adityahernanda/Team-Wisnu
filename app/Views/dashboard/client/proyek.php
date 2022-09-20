<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Proyek</h1>
    </div>

    <!-- Daftar Proyek -->
    <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
        <!-- Proyek Tabel -->
        <div class="card shadow mb-4 gap-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="proyekTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <!-- <th>No.</th> -->
                                <th>Nama Proyek</th>
                                <th>Tanggal</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>1</td>
                                <td>Proyek 1</td>
                                <td>17/07/2022</td>
                                <td>Wiyung</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/dashboard/client/proyek/contohIdProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#proyekTable').DataTable({
            ajax: '/action/proyek/cust-123',
            columns: [{
                    data: "nama"
                },
                {
                    data: "tgl_mulai"
                },
                {
                    data: "lokasi_proyek"
                },
                {
                    data: "id_proyek",
                    render: (data) => {
                        return `
                            <td class="text-center">
                                <a href="<?= base_url('/dashboard/client/proyek') ?>/${data}" class="btn btn-primary">Detail</a>
                            </td>
                        `;
                    }
                }
            ]
        });
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>