<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SuperAdminDashboard extends BaseController
{
    public function index()
    {
        return viewSA('dashboard/super/main');
    }

    public function proyek($idOwner = null, $idProyek = null, $idProgress = null)
    {
        if ($idOwner && $idProyek && $idProgress) {
            return viewSA('dashboard/super/riwayat_progress');
        } else if ($idOwner && $idProyek) {
            return viewSA('dashboard/super/progress');
        } else if ($idOwner) {
            return viewSA('dashboard/super/proyek');
        }
        return viewSA('dashboard/super/daftar_owner');
    }

    public function pembayaran($idProyek = null)
    {
        if ($idProyek) {
            return viewSA('dashboard/super/pembayaran_proyek');
        }
        return viewSA('dashboard/super/pembayaran');
    }

    public function portofolio()
    {
        return viewSA('dashboard/super/portofolio');
    }

    public function pengguna()
    {
        return viewSA('dashboard/super/pengguna');
    }

    public function profile()
    {
        return viewSA('dashboard/super/profile');
    }
}
