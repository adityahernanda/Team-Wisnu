<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rincian Pembayaran <span class="namaUser">Doddy/Lita/Bagong</span> </h1>
    </div>

    <!-- Tombol Tambah Pembayaran -->
    <div class="row">
        <div class="col">
            <!-- Tambah Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Tambah
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="tambahRABTanggal">Tanggal Bayar</label>
                                    <input type="date" class="form-control" id="tambahRABTanggal" aria-describedby="tambahRABTanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahRABNominal">Nominal</label>
                                    <input type="text" class="form-control" id="tambahRABNominal" aria-describedby="tambahRABNominal" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahRABKeterangan">Keterangan Tambahan</label>
                                    <textarea class="form-control" name="tambahRABKeterangan" id="tambahRABKeterangan" aria-describedby="tambahRABKeterangan" cols="40" rows="5">
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        Rp 40,000</div>
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
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        Rp 15,000</div>
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
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        Rp 25,000</div>
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

        <div class="col-xl-7">
            <!-- RAB Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Nominal</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2011/04/25</td>
                                    <td>5.000.000</td>
                                    <td>Bayar dana tukang</td>
                                    <td>
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2022/04/25</td>
                                    <td>1.500.000</td>
                                    <td>Bayar dana pengelasan besi</td>
                                    <td>
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2015/04/25</td>
                                    <td>8.000.000</td>
                                    <td>Pengecatan Dinding Kamar Tidur</td>
                                    <td>
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h5>File Rancang Anggaran Bangun</h5>
            <a href="" class="btn btn-outline-primary mb-4">Unduh</a>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>