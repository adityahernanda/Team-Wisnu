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
                        <!-- <tr>
                            <td>1</td>
                            <td>Pemasangan Ubin Ruang Tamu</td>
                            <td>2011/04/25</td>
                            <td>5.000.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohIdProyek/idProgress') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pemasangan Titik Lampu</td>
                            <td>2022/04/25</td>
                            <td>1.500.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohIdProyek/idProgress') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pengecatan Dinding Kamar Tidur</td>
                            <td>2015/04/25</td>
                            <td>8.000.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohIdProyek/idProgress') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Las Pagar Depan</td>
                            <td>2020/04/25</td>
                            <td>2.000.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohIdProyek/idProgress') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Pemasangan Ubin Ruang Tamu</td>
                            <td>2011/04/25</td>
                            <td>5.000.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohIdProyek/idProgress') ?>" class="btn btn-danger">Detail</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pemasangan Ubin Ruang Tamu</td>
                            <td>2011/04/25</td>
                            <td>5.000.000</td>
                            <td><a href="<?= base_url('/dashboard/client/proyek/contohIdProyek/idProgress') ?>" class="btn btn-danger">Detail</a></td>
                        </tr> -->

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
        $.ajax({
            url: '/action/progress/proy-123',
            method: "GET",
            success: (res) => {
                console.log(res);
            }
        })
        $('#progressTable').DataTable({
            ajax: '/action/progress/proy-123',
            columns: [{
                    data: "nama"
                },
                {
                    data: "tgl_progress"
                },
                {
                    data: "biaya"
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