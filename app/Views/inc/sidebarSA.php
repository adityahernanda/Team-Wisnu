<?php
$uri = service('uri');

$dashboard = $uri->getSegment(3) == '' ? 'active' : '';
$proyek = $uri->getSegment(3) == 'proyek' ? 'active' : '';
$pembayaran = $uri->getSegment(3) == 'pembayaran' ? 'active' : '';
$portofolio = $uri->getSegment(3) == 'portofolio' ? 'active' : '';
$pengguna = $uri->getSegment(3) == 'pengguna' ? 'active' : '';
?>
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/dashboard/sa') ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/img/Logo.png') ?>" width="40" height="40" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Team Wisnu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $dashboard ?>">
        <a class="nav-link" href="<?= base_url('/dashboard/sa') ?>">
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
        <a class="nav-link" href="<?= base_url('/dashboard/sa/proyek') ?>">
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
        <a class="nav-link" href="<?= base_url('/dashboard/sa/pembayaran') ?>">
            <i class="bi bi-credit-card-2-back"></i>
            <span>Pembayaran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Landing Page
    </div>

    <!-- Nav Item - Akun -->
    <li class="nav-item <?= $portofolio ?>">
        <a class="nav-link" href="<?= base_url('/dashboard/sa/portofolio') ?>">
            <i class="bi bi-images"></i>
            <span>Portofolio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Akun
    </div>

    <!-- Nav Item - Akun -->
    <li class="nav-item <?= $pengguna ?>">
        <a class="nav-link" href="<?= base_url('/dashboard/sa/pengguna') ?>">
            <i class="bi bi-person-square"></i>
            <span>Manajemen Pengguna</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>