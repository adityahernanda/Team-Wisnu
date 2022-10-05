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
                            <form id="tambahPengguna" method="POST" action="/action/client/add">
                                <div class="form-group">
                                    <label for="tambahAkunUsername">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="tambahAkunUsername" aria-describedby="tambahAkunUsername" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahAkunPassword">Password</label>
                                    <input name="pass" type="password" class="form-control" id="tambahAkunPassword" aria-describedby="tambahAkunPassword" required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahAkunEmail">Email</label>
                                    <input name="email" type="email" class="form-control" id="tambahAkunEmail" aria-describedby="tambahAkunEmail" required>
                                </div>
                                <div class="form-group">
                                    <label for="tambahAkunTel">No. Telepon</label>
                                    <input name="hp" type="tel" class="form-control" id="tambahAkunTel" aria-describedby="tambahAkunTel" required>
                                </div>
                                <div class="form-group">
                                    <label for="tipe">Role:</label>
                                    <select class="form-control" id="tipe">
                                        <option value="client">Client</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            <script>
                                $('#tipe').on('change', function() {
                                    const tipe = $(this).val();
                                    if (tipe == 'admin') {
                                        $('#tambahPengguna').attr('action', '/action/admin/add');
                                    } else if (tipe == 'client') {
                                        $('#tambahPengguna').attr('action', '/action/client/add');
                                    }
                                });
                            </script>
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
                    <table class="table table-bordered" id="adminTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

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
                        <table class="table table-bordered" id="clientTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editAkunAdminModal" tabindex="-1" aria-labelledby="editAkunClientModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAkunClientModalLabel">Edit Akun Admin
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/action/admin/edit">
                        <div class="form-group">
                            <label for="tambahAkunPassword">Password</label>
                            <input type="password" class="form-control" name="pass" id="tambahAkunPassword" aria-describedby="tambahAkunPassword">
                        </div>
                        <div class="form-group">
                            <label for="tambahAkunEmail">Email</label>
                            <input type="email" class="form-control" name="email" id="tambahAkunEmail" aria-describedby="tambahAkunEmail">
                        </div>
                        <div class="form-group">
                            <label for="tambahAkunTel">No.
                                Telepon</label>
                            <input type="tel" class="form-control" name="hp" id="tambahAkunTel" aria-describedby="tambahAkunTel">
                        </div>
                        <input type="hidden" name="id" id="idAdminEdit">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteAkunAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Item</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Yakin ingin menghapus item?</div>
                <div class="modal-footer">
                    <form action="/action/admin/delete" method="post">
                        <input type="hidden" name="email" id="emailAdminDelete">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                    <form method="POST" action="/action/client/edit">
                        <div class="form-group">
                            <label for="tambahAkunPassword">Password</label>
                            <input type="password" class="form-control" name="pass" id="tambahAkunPassword" aria-describedby="tambahAkunPassword">
                        </div>
                        <div class="form-group">
                            <label for="tambahAkunEmail">Email</label>
                            <input type="email" class="form-control" name="email" id="tambahAkunEmail" aria-describedby="tambahAkunEmail">
                        </div>
                        <div class="form-group">
                            <label for="tambahAkunTel">No.
                                Telepon</label>
                            <input type="tel" class="form-control" name="hp" id="tambahAkunTel" aria-describedby="tambahAkunTel">
                        </div>
                        <input type="hidden" name="id" id="idCustomerEdit">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteAkunClientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Item</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Yakin ingin menghapus item?</div>
                <div class="modal-footer">
                    <form action="/action/client/delete" method="post">
                        <input type="hidden" name="email" id="emailCustomerDelete">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function modalEditAdmin(id) {
            $('#idAdminEdit').val(id);
            $('#editAkunAdminModal').modal();
        }

        function modalDeleteAdmin(email) {
            $('#emailAdminDelete').val(email);
            $('#deleteAkunAdminModal').modal();
        }
        $('#adminTable').DataTable({
            ajax: '/action/admin/get',
            columns: [{
                    data: "nama"
                },
                {
                    data: "email"
                },
                {
                    data: "hp"
                },
                {
                    data: "email",
                    render: (data, type, row) => {
                        return `
                            <td>
                                <button type="button" class="btn btn-warning" onclick="modalEditAdmin('${row.id_admin}')">
                                    Edit
                                </button>
                                <button class="btn btn-danger" onclick="modalDeleteAdmin('${data}')">Delete</button>
                            </td>
                        `;
                    }
                },
            ]
        });
    </script>
    <script>
        function modalEditClient(id) {
            $('#idCustomerEdit').val(id);
            $('#editAkunClientModal').modal();
        }

        function modalDeleteClient(email) {
            $('#emailCustomerDelete').val(email);
            $('#deleteAkunClientModal').modal();
        }
        $('#clientTable').DataTable({
            ajax: '/action/client/get',
            columns: [{
                    data: "nama"
                },
                {
                    data: "email"
                },
                {
                    data: "hp"
                },
                {
                    data: "email",
                    render: (data, type, row) => {
                        return `
                            <td>
                                <button type="button" class="btn btn-warning" onclick="modalEditClient('${row.id_customer}')">
                                    Edit
                                </button>
                                <button class="btn btn-danger" onclick="modalDeleteClient('${data}')">Delete</button>
                            </td>
                        `;
                    }
                },
            ]
        });
    </script>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>