<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?= base_url('assets/img/Logo_2.png') ?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Team Wisnu - Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/sb_admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- BS Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/sb_admin/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/sb_admin/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- My SB Admin CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/sb_admin/my-sbAdmin.css') ?>">

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lightbox/lightbox.css') ?>">

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/sb_admin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/sb_admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb_admin/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/sb_admin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/sb_admin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/sb_admin//demo/datatables-demo.js') ?>"></script>

    <!-- Lightbox JS -->
    <script src="<?= base_url('assets/js/lightbox/lightbox.js') ?>"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        $uri = service('uri');
        $sidebarFile;
        switch ($uri->getSegment(2)) {
            case "client":
                $sidebarFile = "sidebarClient";
                break;
            case "admin":
                $sidebarFile = "sidebarAdmin";
                break;
            case "sa":
                $sidebarFile = "sidebarSA";
                break;
        }
        ?>
        <!-- Sidebar -->
        <?= $this->include('inc/' . $sidebarFile) ?>
        <!-- End of Sidebar -->

        <script>
            $(document).ready(function() {
                $('#sidebarToggleTop').on('click', function() {
                    $('#accordionSidebar').toggleClass('toggled');
                });
                $('#sidebarToggle').on('click', function() {
                    $('#accordionSidebar').toggleClass('toggled');
                });
            });
        </script>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">



            <div id="content">

                <!-- Topbar -->
                <?= $this->include('inc/topbarDashboard') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('content') ?>
                <!-- /.container-fluid -->

            </div>

            <!-- Footer -->
            <?= $this->include('inc/footerDashboard') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Team Wisnu - Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Yakin ingin keluar?</div>
                <div class="modal-footer">
                    <form action="/action/logout" method="post">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>