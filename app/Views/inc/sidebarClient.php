<?php
$uri = service('uri');

$dashboard = $uri->getSegment(3) == '' ? 'active' : '';
$proyek = $uri->getSegment(3) == 'proyek' ? 'active' : '';
$pembayaran = $uri->getSegment(3) == 'pembayaran' ? 'active' : '';
?>
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/dashboard/client') ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/img/Logo.png') ?>" width="40" height="40" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Team Wisnu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $dashboard ?>">
        <a class="nav-link" href="<?= base_url('/dashboard/client') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Progress
    </div>

    <!-- Nav Item - Proyek -->
    <li class="nav-item <?= $proyek ?>">
        <a class="nav-link" href="<?= base_url('/dashboard/client/proyek') ?>">
            <i class="bi bi-list-task"></i>
            <span>Proyek</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Bayar
    </div>

    <!-- Nav Item - Pembayaran -->
    <li class="nav-item <?= $pembayaran ?>">
        <a class="nav-link" href="<?= base_url('/dashboard/client/pembayaran') ?>">
            <i class="bi bi-credit-card-2-back"></i>
            <span>Informasi Pembayaran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>