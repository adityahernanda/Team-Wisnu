<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<?php
$uri = service('uri');
$tipe = $uri->getSegment(4);
$id = $uri->getSegment(5);

$nama = isset($proyek->nama_proyek) ? $proyek->nama_proyek : "";
$id_customer = isset($proyek->id_customer) ? $proyek->id_customer : "";
$id_admin = isset($proyek->id_admin) ? $proyek->id_admin : "";
$tglMulai = isset($proyek->tgl_mulai) ? $proyek->tgl_mulai : "";
$tglSelesai = isset($proyek->tgl_selesai) ? $proyek->tgl_selesai : "";
$lokasi = isset($proyek->lokasi_proyek) ? $proyek->lokasi_proyek : "";
$anggaran = isset($proyek->biaya) ? $proyek->biaya : "";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><span style="text-transform: capitalize;"><?= $tipe ?></span> Proyek</h1>
    </div>

    <form method="post" enctype="multipart/form-data" action="/action/proyek/<?= $tipe ?>" class="container-fluid">
        <div class="row">
            <!-- Detail Proyek -->
            <div class="col-xl-4">
                <div class="form-group">
                    <h4>Detail Proyek</h4>
                    <label for="namaProyek">Nama Proyek</label>
                    <input name="nama" type="text" value="<?= $nama ?>" class="form-control" id="namaProyek" aria-describedby="namaProyek" autofocus required>
                </div>
                <div class="form-group">
                    <label for="namaOwner">Owner</label>
                    <select name="id_customer" class="form-control" id="owner" selec>
                        <?php foreach ($users as $row) : ?>
                            <option value="<?= $row['id_customer'] ?>" <?= $row['id_customer'] == $id_customer ? "selected" : "" ?>><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pengawas">Pilih Pengawas:</label>
                    <select name="id_admin" class="form-control" id="pengawas">
                        <?php foreach ($admin as $row) : ?>
                            <option value="<?= $row['id_admin'] ?>" <?= $row['id_admin'] == $id_admin ? "selected" : "" ?>><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <script>
                    $('#pengawas').select2();
                    $('#owner').select2();
                </script>
                <div class="form-group">
                    <label for="tanggalMulaiProyek">Tanggal Mulai</label>
                    <input name="tgl_mulai" type="date" class="form-control" value="<?= $tglMulai ?>" id="tanggalMulaiProyek" aria-describedby="tanggalMulaiProyek" required>
                </div>
                <div class="form-group">
                    <label for="tanggalMulaiBerakhir">Tanggal Berakhir</label>
                    <input name="tgl_selesai" type="date" class="form-control" value="<?= $tglSelesai ?>" id="tanggalMulaiBerakhir" aria-describedby="tanggalMulaiBerakhir" required>
                </div>
            </div>

            <!-- Lokasi Proyek -->
            <div class="col-xl-4">
                <h4>Lokasi Proyek</h4>
                <div class="form-group">
                    <label for="alamatOwner">Alamat</label>
                    <input name="lokasi" type="text" value="<?= $lokasi ?>" class="form-control" id="alamatOwner" aria-describedby="alamatOwner" required>
                </div>
            </div>

            <!-- RAB Proyek -->
            <div class="col-xl-4">
                <h4>RAB</h4>
                <div class="form-group">
                    <p>Tambahkan file RAB</p>
                    <div class="custom-file mb-3">
                        <input name="rab" type="file" accept=".xlsx,.pdf" class="custom-file-input" id="validatedCustomFile" <?= $tipe == "add" ? 'required' : '' ?>>
                        <label class="custom-file-label" for="validatedCustomFile">
                            Tambahkan file...
                        </label>
                    </div>
                </div>
                <label for="">Anggaran</label>
                <input name="biaya" value="<?= $anggaran ?>" type="number" class="form-control">
            </div>
        </div>
        <a href="<?= base_url('/dashboard/sa/proyek') ?>" class="btn btn-outline-dark mb-3">Batal</a>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" class="btn btn-danger mb-3" style="text-transform: capitalize;"><?= $tipe ?></button>
    </form>


</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>