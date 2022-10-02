<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portofolio</h1>
    </div>

    <!-- Daftar Portofolio Tabel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <div>
                <h6 class="m-0 font-weight-bold text-primary">Daftar Portofolio</h6>
            </div>

            <div>
                <button id="tambahBtn" class="btn btn-danger">
                    <i class="bi bi-plus-circle" style="font-size: 14px;"></i>
                    Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="portoTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addPorto">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAkunClientModalLabel">Tambah Portofolio
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/action/portofolio/add" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="uploadPortofolio">Gambar portofolio</label>
                            <input accept=".jpg,.jpeg,.png" required name="gambar" type="file" class="form-control-file" id="uploadPortofolio">
                        </div>

                        <div class="form-group">
                            <label for="keteranganPortofolio">Keterangan gambar</label>
                            <textarea required name="ket" class="form-control" id="keteranganPortofolio" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editPorto">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAkunClientModalLabel">Edit Portofolio
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/action/portofolio/edit" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="uploadPortofolio">Ubah gambar portofolio</label>
                            <input name="gambar" accept=".jpg,.jpeg,.png" type="file" class="form-control-file" id="uploadPortofolio">
                        </div>

                        <div class="form-group">
                            <label for="keteranganPortofolio">Ubah keterangan gambar</label>
                            <textarea name="ket" class="form-control" id="keteranganPortofolio" rows="5"></textarea>
                        </div>
                        <input type="hidden" name="id" id="idPortoEdit">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deletePorto">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Item</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Yakin ingin menghapus item?</div>
                <div class="modal-footer">
                    <form action="/action/portofolio/delete" method="post">
                        <input type="hidden" name="id" id="idPortoDel">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#tambahBtn').on('click', function() {
            $('#addPorto').modal();
        });

        function editPorto(id) {
            $('#idPortoEdit').val(id);
            $('#editPorto').modal();
        }

        function deletePorto(id) {
            $('#idPortoDel').val(id);
            $('#deletePorto').modal();
        }
        $('#portoTable').DataTable({
            ajax: '/action/portofolio/get',
            columns: [{
                    data: 'url_gambar',
                    render: (data) => {
                        return `
                            <img src="<?= base_url('uploads/portofolio') ?>/${data}" width="250" alt="gambar portofolio">
                        `;
                    }
                },
                {
                    data: 'keterangan'
                },
                {
                    data: 'id_portofolio',
                    render: (data) => {
                        return `
                            <button class="btn btn-warning" onclick="editPorto('${data}')">Edit</button>
                            <button class="btn btn-danger" onclick="deletePorto('${data}')">Hapus</button>
                        `;
                    }
                },
            ]
        });
    </script>
</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>