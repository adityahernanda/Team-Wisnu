<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add/Edit Portofolio</h1>
    </div>

    <form>
        <div class="form-group">
            <label for="uploadPortofolio">Ubah gambar portofolio</label>
            <input type="file" class="form-control-file" id="uploadPortofolio">
        </div>

        <div class="form-group">
            <label for="keteranganPortofolio">Ubah keterangan gambar</label>
            <textarea class="form-control" id="keteranganPortofolio" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>