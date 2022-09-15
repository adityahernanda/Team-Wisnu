<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit/ADD Progress</h1>
    </div>

    <form>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="namaProgress">Nama Progress</label>
                    <input type="text" class="form-control" id="namaProgress" aria-describedby="namaProgress" autofocus>
                </div>
                <div class="form-group">
                    <label for="tanggalProgress">Tanggal Progress</label>
                    <input type="date" class="form-control" id="tanggalProgress" aria-describedby="tanggalProgress">
                </div>
                <div class="form-group">
                    <label for="biayaProgress">Biaya Keluar</label>
                    <input type="text" class="form-control" id="biayaProgress" aria-describedby="biayaProgress">
                </div>
                <div class="form-group">
                    <label for="presentaseProgress">Presentase Pekerjaan</label>
                    <input type="text" class="form-control" id="presentaseProgress" aria-describedby="presentaseProgress">
                </div>
                <div class="form-group">
                    <label for="keteranganProgress">Keterangan</label>
                    <textarea class="form-control" id="keteranganProgress" aria-describedby="keteranganProgress" cols="30" rows="5"></textarea>
                </div>
            </div>

            <div class="col">
                <div class="container-upload">
                    <div class="form-group">
                        <label for="uploadGambar">Upload Gambar</label>
                        <input type="file" class="form-control-file" id="uploadGambar">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-2">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>