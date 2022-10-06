<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-4">
            <form method="POST" action="/action/profile/admin">
                <div class="form-group">
                    <div class="foto-profile d-flex flex-column justify-content-center align-items-center">
                        <img class="img-profile rounded-circle mb-3" src="<?= base_url('img/undraw_profile.svg') ?>" width="150" height="150">
                        <h5><?= $_SESSION['nama'] ?></h5>
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailProfile">Email address</label>
                    <input name="email" type="email" class="form-control" id="emailProfile" aria-describedby="emailProfile" autofocus value="<?= $profile->email ?>">
                </div>
                <div class="form-group">
                    <label for="passwordProfile">Password</label>
                    <input name="pass" type="password" class="form-control" id="passwordProfile">
                </div>
                <div class="form-group">
                    <label for="telProfile">No Telepon</label>
                    <input name="hp" type="tel" class="form-control" id="telProfile" aria-describedby="telProfile" value="<?= $profile->hp ?>">
                </div>
                <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">

                <a href="javascript:history.back()" class="btn btn-outline-danger mb-4">Batal</a>
                <button type="submit" class="btn btn-primary mb-4">Simpan</button>
            </form>
        </div>
    </div>
    <script>
        <?php if (session()->getFlashdata("sukses")) : ?>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Sukses!',
                showConfirmButton: false,
                timer: 1500
            })
        <?php endif; ?>
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>