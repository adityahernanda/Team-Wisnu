<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add/Edit Proyek</h1>
    </div>

    <form method="post" class="container-fluid">
        <div class="row">
            <!-- Detail Proyek -->
            <div class="col-xl-4">
                <div class="form-group">
                    <h4>Detail Proyek</h4>
                    <label for="namaProyek">Nama Proyek</label>
                    <input type="text" class="form-control" id="namaProyek" aria-describedby="namaProyek" autofocus required>
                </div>
                <div class="form-group">
                    <label for="namaOwner">Owner</label>
                    <input type="text" class="form-control" id="namaOwner" aria-describedby="namaOwner" required>
                </div>
                <div class="form-group">
                    <label for="pengawas">Pilih Pengawas:</label>
                    <select class="form-control" id="pengawas">
                        <option value="pengawas 1">Pengawas 1</option>
                        <option value="pengawas 2">Pengawas 2</option>
                        <option value="pengawas 3">Pengawas 3</option>
                        <option value="pengawas 4">Pengawas 4</option>
                        <option value="pengawas 5">Pengawas 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggalMulaiProyek">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggalMulaiProyek" aria-describedby="tanggalMulaiProyek" required>
                </div>
                <div class="form-group">
                    <label for="tanggalMulaiBerakhir">Tanggal Berakhir</label>
                    <input type="date" class="form-control" id="tanggalMulaiBerakhir" aria-describedby="tanggalMulaiBerakhir" required>
                </div>
            </div>

            <!-- Lokasi Proyek -->
            <div class="col-xl-4">
                <div class="form-group">
                    <h4>Lokasi Proyek</h4>
                    <label for="kotaProyek">Kota</label>
                    <input type="text" class="form-control" id="kotaProyek" aria-describedby="kotaProyek" required>
                </div>
                <div class="form-group">
                    <label for="alamatOwner">Alamat</label>
                    <input type="text" class="form-control" id="alamatOwner" aria-describedby="alamatOwner" required>
                </div>
                <div class="form-group">
                    <label for="keteranganProyek">Keterangan Tambahan</label>
                    <textarea name="keteranganProyek" id="keteranganProyek" aria-describedby="keteranganProyek" cols="33" rows="5">
            </textarea>
                </div>
            </div>

            <!-- RAB Proyek -->
            <div class="col-xl-4">
                <div class="form-group">
                    <h4>Pembayaran dan RAB</h4>
                    <label for="totalBiayaProyek">Total Biaya</label>
                    <input type="text" class="form-control" id="totalBiayaProyek" aria-describedby="totalBiayaProyek" required>
                </div>
                <div class="form-group">
                    <label for="sudahBayarRAB">Sudah Terbayar</label>
                    <input type="text" class="form-control" id="sudahBayarRAB" aria-describedby="sudahBayarRAB" required>
                </div>
                <div class="form-group">
                    <label for="kurangBayarRAB">Kurang Biaya</label>
                    <input type="text" class="form-control" id="kurangBayarRAB" aria-describedby="kurangBayarRAB">
                </div>
                <div class="form-group">
                    <p>Tambahkan file RAB</p>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="validatedCustomFile">
                        <label class="custom-file-label" for="validatedCustomFile">Tambahkan
                            file...</label>
                    </div>
                </div>
            </div>
        </div>
        <a href="proyekpage.html" class="btn btn-outline-dark mb-3">Batal</a>
        <button type="submit" class="btn btn-danger mb-3">Edit</button>
    </form>


</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>