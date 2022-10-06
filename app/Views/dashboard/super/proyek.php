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
                Proyek</button>

            <!-- Riwayat Proyek -->
            <button class="nav-link" id="nav-riwayatProyek-tab" data-toggle="tab" data-target="#nav-riwayatProyek" type="button" role="tab" aria-controls="nav-riwayatProyek" aria-selected="false">Daftar
                Riwayat Proyek</button>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <!-- Daftar Proyek -->
        <div class="tab-pane fade show active" id="nav-daftarProyek" role="tabpanel" aria-labelledby="nav-daftarProyek-tab">
            <!-- Proyek Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <a href="<?= base_url('/dashboard/sa/proyek/add') ?>" class="btn btn-danger mb-3">Tambah Proyek</a>
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

        <!-- Riwayat Proyek -->
        <div class="tab-pane fade" id="nav-riwayatProyek" role="tabpanel" aria-labelledby="nav-riwayatProyek-tab">
            <!-- Riwayat Proyek Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="proyekTableSelesai" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Owner</th>
                                    <th>Nama Pengawas</th>
                                    <th>Nama Proyek</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <!-- <th>Total Pembayaran</th> -->
                                    <!-- <th>Tanggal</th> -->
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
    </div>
    <div class="modal fade" id="updateStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Update status proyek <b id="proyekNama"></b></div>
                <div class="modal-footer">
                    <form action="/action/proyek/update" method="post">
                        <input type="hidden" name="id" id="proyekId">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="selesai" class="btn btn-success">Selesai</button>
                        <button type="submit" name="cancelled" class="btn btn-danger">Cancelled</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        <?php if (session()->getFlashdata("sukses")) : ?>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Sukses!',
                showConfirmButton: false,
                timer: 1500
            })
        <?php endif; ?>
    </script>
    <script>
        function updateModal(id, nama) {
            $('#proyekId').val(id);
            $('#proyekNama').html(nama);
            $('#updateStatus').modal();
        }
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
                    render: (data, type, row) => {
                        return `
                            <button onclick="updateModal('${data}','${row.nama_proyek}')" class="btn btn-danger">Status</button>
                            <a href="<?= base_url('/dashboard/sa/proyek/edit') ?>/${data}" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('/dashboard/sa/proyek') ?>/${data}" class="btn btn-primary">Detail</a>
                        `;
                    }
                },
            ]
        });

        $('#proyekTableSelesai').DataTable({
            ajax: '/action/proyek/get/selesai',
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
                    data: 'status'
                },
                {
                    data: 'id_proyek',
                    render: (data) => {
                        return `
                            <a href="<?= base_url('/dashboard/sa/proyek/idOwner/idProyek/idProgress') ?>" class="btn btn-primary">Detail</a>
                        `;
                    }
                },
            ]
        });
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>