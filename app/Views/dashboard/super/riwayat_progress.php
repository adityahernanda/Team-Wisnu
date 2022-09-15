<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Riwayat Progress Proyek</h1>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <!-- Detail Progress Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Proyek</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="detailPemilik">Pemilik</label>
                                    <input type="text" class="form-control" id="detailPemilik" aria-describedby="detailPemilik" value="Rudi Salim" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="detailnamaProyek">Nama Proyek</label>
                                    <input type="text" class="form-control" id="detailnamaProyek" value="Rumah Mahal" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="detailTanggalMulai">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="detailTanggalMulai" value="2022-03-12" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="detailTanggalSelesai">Tanggal Selesai</label>
                                    <input type="date" class="form-control" id="detailTanggalSelesai" value="2024-03-12" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="detailnamaPengawas">Nama Pengawas</label>
                                    <input type="text" class="form-control" id="detailnamaPengawas" value="Pak Tesa" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="detailAlamat">Alamat</label>
                                    <textarea class="form-control" name="detailAlamat" id="detailAlamat" cols="30" rows="5" readonly>Jl. Wiyung Gg.1 Surabaya</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Akhir Form -->
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <!-- Detail RAB Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rancang Anggaran Bangun</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="detailRABTot">Total RAB</label>
                            <input type="text" class="form-control" id="detailRABTot" aria-describedby="detailRABTot" value="5.000.000" readonly>
                        </div>
                        <div class="form-group">
                            <label for="detailRABTerbayar">Sudah Terbayar</label>
                            <input type="text" class="form-control" id="detailRABTerbayar" value="3.000.000" readonly>
                        </div>
                        <div class="form-group">
                            <label for="detailRABKurang">Belum Terbayar</label>
                            <input type="text" class="form-control" id="detailRABKurang" value="2.000.000" readonly>
                        </div>
                    </form>
                    <!-- Akhir Form -->
                </div>
            </div>
        </div>

        <div class="col-xl-12">
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
                    <a href="<?= base_url('assets/img/portofolio 4.jpg') ?>" data-lightbox="roadtrip">
                        <img class="mb-3" src="<?= base_url('assets/img/portofolio 4.jpg') ?>" width="100" height="100" alt="">
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