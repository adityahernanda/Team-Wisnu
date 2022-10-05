<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    $uri = service('uri');

    $idProgress = "";
    $ket = "";
    $nama = "";
    $presentase = "";
    $tgl = "";
    if (isset($progress)) {
        $idProgress = $progress->id_progress;
        $ket = $progress->keterangan;
        $nama = $progress->nama;
        $presentase = $progress->presentase;
        $tgl = $progress->tgl_progress;
    }
    ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><span style="text-transform: capitalize;"><?= $uri->getSegment(5) ?></span> Progress</h1>
    </div>

    <form method="POST" enctype="multipart/form-data" action="/action/progress/<?= $uri->getSegment(5) ?>">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="namaProgress">Nama Progress</label>
                    <input value="<?= $nama ?>" name="nama" type="text" class="form-control" id="namaProgress" aria-describedby="namaProgress" autofocus>
                </div>
                <div class="form-group">
                    <label for="tanggalProgress">Tanggal Progress</label>
                    <input value="<?= $tgl ?>" name="tgl" type="date" class="form-control" id="tanggalProgress" aria-describedby="tanggalProgress">
                </div>
                <div class="form-group">
                    <label for="presentaseProgress">Presentase Pekerjaan</label>
                    <input value="<?= $presentase ?>" name="presentase" type="number" class="form-control" id="presentaseProgress" aria-describedby="presentaseProgress">
                </div>
                <div class="form-group">
                    <label for="keteranganProgress">Keterangan</label>
                    <textarea name="ket" class="form-control" id="keteranganProgress" aria-describedby="keteranganProgress" cols="30" rows="5"><?= $ket ?></textarea>
                </div>
            </div>
            <div class="col">
                <?php if ($uri->getSegment(5) == "add") : ?>
                    <div class="container-upload">
                        <div class="form-group">
                            <label for="uploadGambar">Upload Gambar</label>
                            <input name="gambar[]" multiple size="8" type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="uploadGambar">
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <input type="hidden" name="id" value="<?= $uri->getSegment(4) ?>">
        <input type="hidden" name="id_progress" value="<?= $idProgress ?>">
        <button type="submit" class="btn btn-primary my-2">Simpan</button>
    </form>
    <script>
        const fileUpload = $("input[type='file']");
        fileUpload.on('change', function() {
            if (parseInt(fileUpload.get(0).files.length) > 5) {
                alert("Hanya bisa upload maksimal 8 file");
                fileUpload.val("");
            }
        });
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>