<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>

    <form>
        <div class="form-group">
            <div class="foto-profile d-flex flex-column justify-content-center align-items-center">
                <img class="img-profile rounded-circle mb-3" src="<?= base_url('img/undraw_profile.svg') ?>" width="150" height="150">
                <h5>Wisnu</h5>
            </div>
            <label for="exampleFormControlFile1">Ubah Foto</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="emailProfile">Email address</label>
            <input type="email" class="form-control" id="emailProfile" aria-describedby="emailProfile" autofocus>
        </div>
        <div class="form-group">
            <label for="passwordProfile">Password</label>
            <input type="password" class="form-control" id="passwordProfile">
        </div>
        <div class="form-group">
            <label for="telProfile">No Telepon</label>
            <input type="tel" class="form-control" id="telProfile" aria-describedby="telProfile">
        </div>

        <a href="clientIndex.html" class="btn btn-outline-danger mb-4">Batal</a>
        <button type="submit" class="btn btn-primary mb-4">Simpan</button>
    </form>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>