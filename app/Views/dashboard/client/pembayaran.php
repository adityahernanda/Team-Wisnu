<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Informasi Pembayaran</h1>
        <select id="proyekFilter" class="form-control col-12 col-md-4">
            <?php foreach ($proyek as $row) : ?>
                <option value="<?= $row['id_proyek'] ?>"><?= $row['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row">
        <div class="col-xl-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rincian Pembayaran</h6>
                </div>
                <div class="card-body">
                    <div class="row">
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
                                                        Rp 40,000
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
                                                        Rp 15,000
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
            <!-- Pembayaran Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="pembayaranTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <!-- <th>No.</th> -->
                                    <th>Tanggal Bayar</th>
                                    <th>Nominal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- 
                                <tr>
                                    <td>1</td>
                                    <td>2011/04/25</td>
                                    <td>5.000.000</td>
                                    <td>Bayar dana tukang</td>
                                </tr>
                                -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p>File Rancang Bangunan</p>
            <a href="" class="btn btn-outline-primary mb-4">Unduh</a>
        </div>
    </div>
    <script src="<?= base_url('/assets/js/client/pembayaran.js') ?>" type="module"></script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>