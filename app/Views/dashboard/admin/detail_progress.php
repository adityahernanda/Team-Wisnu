<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Progress Proyek</h1>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <!-- Detail Progress Card -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="namaProgress">Nama Progress</label>
                            <input type="text" class="form-control" id="namaProgress" aria-describedby="namaProgress" value="Pemasangan ubin ruang tamu" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tanggalProgress">Tanggal Progress</label>
                            <input type="date" class="form-control" id="tanggalProgress" value="2022-03-12" readonly>
                        </div>
                        <div class="form-group">
                            <label for="biayaKeluar">Biaya Keluar</label>
                            <input type="text" class="form-control" id="biayaKeluar" aria-describedby="biayaKeluar" value="5.000.000" readonly>
                        </div>
                        <div class="form-group">
                            <label for="presentaseKerja">Presentase Pekerjaan (%)</label>
                            <input type="text" class="form-control" id="presentaseKerja" aria-describedby="presentaseKerja" value="50" readonly>
                        </div>
                        <div class="form-group">
                            <label for="keteranganProgress">Keterangan</label>
                            <textarea class="form-control" name="keteranganProgress" id="keteranganProgress" cols="30" rows="5" readonly>Ubin telah terpakai 5 kardus, tersisa 6 kardus</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <!-- Foto Proyek Card -->
            <div class="card shadow mb-4 foto-card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Foto Proyek</h6>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('assets/img/portofolio 1.jpg') ?>" data-lightbox="roadtrip">
                        <img class="mb-3" src="<?= base_url('assets/img/portofolio 1.jpg') ?>" width="100" height="100" alt="">
                    </a>
                    <a href="<?= base_url('assets/img/portofolio 2.jpg') ?>" data-lightbox="roadtrip">
                        <img class="mb-3" src="<?= base_url('assets/img/portofolio 2.jpg') ?>" width="100" height="100" alt="">
                    </a>
                    <a href="<?= base_url('assets/img/portofolio 3.jpg') ?>" data-lightbox="roadtrip">
                        <img class="mb-3" src="<?= base_url('assets/img/portofolio 3.jpg') ?>" width="100" height="100" alt="">
                    </a>
                    <a href="<?= base_url('assets/img/portofolio 5.jpg') ?>" data-lightbox="roadtrip">
                        <img class="mb-3" src="<?= base_url('assets/img/portofolio 5.jpg') ?>" width="100" height="100" alt="">
                    </a>
                    <a href="<?= base_url('assets/img/portofolio 6.jpg') ?>" data-lightbox="roadtrip">
                        <img class="mb-3" src="<?= base_url('assets/img/portofolio 6.jpg') ?>" width="100" height="100" alt="">
                    </a>
                    <a href="<?= base_url('assets/img/portofolio 4.jpg') ?>" data-lightbox="roadtrip">
                        <img class="mb-3" src="<?= base_url('assets/img/portofolio 4.jpg') ?>" width="100" height="100" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>