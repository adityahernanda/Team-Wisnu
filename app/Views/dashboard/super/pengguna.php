<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Pengguna</h1>
    </div>

    <!-- Tambah Akun -->
    <div class="row my-3">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAkunModal">
                Tambah
            </button>

            <!-- Modal -->
            <div class="modal fade" id="tambahAkunModal" tabindex="-1" aria-labelledby="tambahAkunModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahAkunModalLabel">Tambah Akun Pengguna
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="tambahAkunUsername">Username</label>
                                    <input type="text" class="form-control" id="tambahAkunUsername" aria-describedby="tambahAkunUsername" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahAkunPassword">Password</label>
                                    <input type="password" class="form-control" id="tambahAkunPassword" aria-describedby="tambahAkunPassword" required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahAkunEmail">Email</label>
                                    <input type="email" class="form-control" id="tambahAkunEmail" aria-describedby="tambahAkunEmail" required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahAkunTel">No. Telepon</label>
                                    <input type="tel" class="form-control" id="tambahAkunTel" aria-describedby="tambahAkunTel" required>
                                </div>
                                <div class="form-group">
                                    <label for="pengawas">Role:</label>
                                    <select class="form-control" id="pengawas">
                                        <option value="admin">Admin</option>
                                        <option value="client">Client</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal -->
        </div>
    </div>

    <!-- Daftar Pengawas Card -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#daftarPengawasCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="daftarPengawasCard">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengawas</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="daftarPengawasCard">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sudar1234</td>
                                <td>sudar@gmail.com</td>
                                <td>087654321</td>
                                <td>
                                    <!-- Edit Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editAkunAdminModal">
                                        Edit
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editAkunAdminModal" tabindex="-1" aria-labelledby="editAkunAdminModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editAkunAdminModalLabel">Edit Akun
                                                        Admin
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="tambahAkunPassword">Password</label>
                                                            <input type="password" class="form-control" id="tambahAkunPassword" aria-describedby="tambahAkunPassword" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tambahAkunEmail">Email</label>
                                                            <input type="email" class="form-control" id="tambahAkunEmail" aria-describedby="tambahAkunEmail" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tambahAkunTel">No.
                                                                Telepon</label>
                                                            <input type="tel" class="form-control" id="tambahAkunTel" aria-describedby="tambahAkunTel" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pak Sale</td>
                                <td>sale@gmail.com</td>
                                <td>031123456</td>
                                <td>
                                    <!-- Edit Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editAkunAdminModal">
                                        Edit
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editAkunAdminModal" tabindex="-1" aria-labelledby="editAkunAdminModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editAkunAdminModalLabel">Edit Akun
                                                        Admin
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="tambahAkunPassword">Password</label>
                                                            <input type="password" class="form-control" id="tambahAkunPassword" aria-describedby="tambahAkunPassword" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tambahAkunEmail">Email</label>
                                                            <input type="email" class="form-control" id="tambahAkunEmail" aria-describedby="tambahAkunEmail" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tambahAkunTel">No.
                                                                Telepon</label>
                                                            <input type="tel" class="form-control" id="tambahAkunTel" aria-describedby="tambahAkunTel" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Client Card -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#daftarClientCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="daftarClientCard">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Client</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="daftarClientCard">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rudi Salim</td>
                                    <td>rudi@gmail.com</td>
                                    <td>087654321</td>
                                    <td>
                                        <!-- Edit Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editAkunClientModal">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editAkunClientModal" tabindex="-1" aria-labelledby="editAkunClientModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editAkunClientModalLabel">Edit Akun
                                                            Client
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="tambahAkunPassword">Password</label>
                                                                <input type="password" class="form-control" id="tambahAkunPassword" aria-describedby="tambahAkunPassword" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tambahAkunEmail">Email</label>
                                                                <input type="email" class="form-control" id="tambahAkunEmail" aria-describedby="tambahAkunEmail" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tambahAkunTel">No.
                                                                    Telepon</label>
                                                                <input type="tel" class="form-control" id="tambahAkunTel" aria-describedby="tambahAkunTel" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bagong</td>
                                    <td>bagong@gmail.com</td>
                                    <td>031123456</td>
                                    <td>
                                        <!-- Edit Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editAkunClientModal">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editAkunClientModal" tabindex="-1" aria-labelledby="editAkunClientModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editAkunClientModalLabel">Edit Akun
                                                            Client
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="tambahAkunPassword">Password</label>
                                                                <input type="password" class="form-control" id="tambahAkunPassword" aria-describedby="tambahAkunPassword" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tambahAkunEmail">Email</label>
                                                                <input type="email" class="form-control" id="tambahAkunEmail" aria-describedby="tambahAkunEmail" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tambahAkunTel">No.
                                                                    Telepon</label>
                                                                <input type="tel" class="form-control" id="tambahAkunTel" aria-describedby="tambahAkunTel" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>