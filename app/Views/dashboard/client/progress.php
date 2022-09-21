<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Proyek</h1>
    </div>

    <!-- Proyek Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Progress Proyek</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="progressTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- <th>No.</th> -->
                            <th>Nama Progress</th>
                            <th>Tanggal Progress</th>
                            <th>Biaya Keluar</th>
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

    <script type="module">
        import {
            formatRupiah
        } from '<?= base_url('/assets/js/helper.js') ?>';

        $('#progressTable').DataTable({
            ajax: '/action/progress/<?= $idProyek ?>',
            columns: [{
                    data: "nama"
                },
                {
                    data: "tgl_progress"
                },
                {
                    data: "biaya",
                    render: (data) => {
                        return formatRupiah(data);
                    }
                },
                {
                    data: "id_progress",
                    render: (data) => {
                        return `
                            <td>
                                <a href="<?= base_url('/dashboard/client/proyek/' . $idProyek) ?>/${data}" class="btn btn-danger">Detail</a>
                            </td>
                    `;
                    }
                },
            ]
        });
    </script>
</div>
<?= $this->endSection() ?>