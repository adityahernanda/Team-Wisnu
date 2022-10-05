<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="mb-3">
        <h1 class="h3 text-gray-800">Rincian Pembayaran</h1>
        <div>
            <table>
                <tr>
                    <th>Nama Owner</th>
                    <th class="text-center" style="width: 20px;">:</th>
                    <td id="owner"></td>
                </tr>
                <tr>
                    <th>Nama Pengawas</th>
                    <th class="text-center" style="width: 20px;">:</th>
                    <td id="pengawas"></td>
                </tr>
                <tr>
                    <th>Nama Proyek</th>
                    <th class="text-center" style="width: 20px;">:</th>
                    <td id="proyek"></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Tombol Tambah Pembayaran -->
    <div class="row">
        <div class="col">
            <!-- Tambah Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addPembayaran">
                Tambah
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-5">
            <!-- Rincian Pembayaran Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rincian Pembayaran</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Total Anggaran Card -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 card-custom">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Anggaran
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div id="anggaran" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-wallet2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sudah Terbayar Card -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 card-custom">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Sudah Terbayar
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div id="terbayar" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-cash-coin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Biaya Kekurangan Card -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2 card-custom">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Biaya Kekurangan
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div id="kekurangan" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function deleteModal(id) {
                $('#idPembayaranDel').val(id);
                $('#deletePembayaran').modal().show();
            }
        </script>

        <div class="col-xl-7">
            <!-- RAB Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="pembayaranTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tanggal Bayar</th>
                                    <th>Nominal</th>
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
            <h5>File Rancang Anggaran Bangun</h5>
            <a href="<?= base_url('uploads/rab/' . $proyek->rab) ?>" download="RAB <?= $proyek->nama_proyek ?>" class="btn btn-outline-primary mb-4">Unduh</a>
        </div>
    </div>

    <?php $uri = service('uri'); ?>

    <!-- Modal -->
    <div class="modal fade" id="addPembayaran">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/action/pembayaran/add">
                        <div class="form-group">
                            <label for="tambahRABNominal">Nominal</label>
                            <input name="jumlah" type="text" class="form-control" id="tambahRABNominal" aria-describedby="tambahRABNominal" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="tambahRABKeterangan">Keterangan Tambahan</label>
                            <textarea name="ket" class="form-control" id="tambahRABKeterangan" aria-describedby="tambahRABKeterangan" cols="40" rows="5"></textarea>
                        </div>
                        <input type="hidden" name="id_proyek" value="<?= $uri->getSegment(4) ?>">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deletePembayaran">
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
                    <form action="/action/pembayaran/delete" method="post">
                        <input type="hidden" name="id" id="idPembayaranDel">
                        <input type="hidden" name="id_proyek" value="<?= $uri->getSegment(4) ?>">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        import {
            formatRupiah
        } from '<?= base_url('assets/js/helper.js') ?>';

        $('#pembayaranTable').DataTable({
            ajax: {
                url: "/action/pembayaran/list",
                type: "POST",
                data: function(d) {
                    d.id_proyek = '<?= $uri->getSegment(4) ?>'
                },
            },
            columns: [{
                    data: "tgl",
                },
                {
                    data: "jumlah",
                    render: (data) => {
                        return formatRupiah(data);
                    },
                },
                {
                    data: "ket",
                },
                {
                    data: "id_pembayaran",
                    render: (data) => {
                        return `
                        <button onclick="deleteModal('${data}')" class="btn btn-danger">Delete</button>
                        `;
                    }
                },
            ],
        })

        function renderCard(obj) {
            $("#anggaran").html(formatRupiah(obj.anggaran));
            $("#terbayar").html(formatRupiah(obj.terbayar));
            $("#kekurangan").html(formatRupiah(obj.kekurangan));
        }

        function renderInfo(obj) {
            $('#owner').html(obj.proyek.nama_owner);
            $('#pengawas').html(obj.proyek.nama_pengawas);
            $('#proyek').html(obj.proyek.nama_proyek);
        }

        $.ajax({
            url: "/action/pembayaran/card",
            method: "POST",
            data: {
                id_proyek: '<?= $uri->getSegment(4) ?>'
            },
            success: function(res) {
                const obj = JSON.parse(res);
                renderInfo(obj);
                renderCard(obj);
            },
        });
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>