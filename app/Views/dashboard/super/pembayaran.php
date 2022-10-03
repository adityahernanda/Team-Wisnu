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
                                <th>Nama Proyek</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <!-- <tbody>
                            <tr>
                                <td>1</td>
                                <td>Doddy</td>
                                <td>Pak Nanang</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/dashboard/sa/pembayaran/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bagong</td>
                                <td>Pak Tesa</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/dashboard/sa/pembayaran/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lita</td>
                                <td>Pak Budi</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/dashboard/sa/pembayaran/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rudi Salim</td>
                                <td>Pak Tesa</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/dashboard/sa/pembayaran/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Marcel</td>
                                <td>Pak Nanang</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/dashboard/sa/pembayaran/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Salsa</td>
                                <td>Pak Budi</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/dashboard/sa/pembayaran/idProyek') ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        </tbody> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $.ajax({
            url: '/action/proyek/get',
            method: 'GET',
            success: (res) => {
                console.log(res);
            }
        })
        $('#proyekTable').DataTable({
            ajax: '/action/proyek/get',
            columns: [{
                    data: 'nama_owner'
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