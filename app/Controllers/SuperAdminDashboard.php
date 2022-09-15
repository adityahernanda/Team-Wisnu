<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SuperAdminDashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/super/main');
    }

    public function proyek($idOwner = null, $idProyek = null, $idProgress = null)
    {
        if ($idOwner && $idProyek && $idProgress) {
            return view('dashboard/super/riwayat_progress');
        } else if ($idOwner && $idProyek) {
            return view('dashboard/super/progress');
        } else if ($idOwner) {
            return view('dashboard/super/proyek');
        }
        return view('dashboard/super/daftar_owner');
    }

    public function pembayaran($idProyek = null)
    {
        if ($idProyek) {
            return view('dashboard/super/pembayaran_proyek');
        }
        return view('dashboard/super/pembayaran');
    }

    public function portofolio()
    {
        return view('dashboard/super/portofolio');
    }

    public function pengguna()
    {
        return view('dashboard/super/pengguna');
    }

    public function profile()
    {
        return view('dashboard/super/profile');
    }
}
