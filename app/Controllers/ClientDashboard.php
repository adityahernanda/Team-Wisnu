<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClientDashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/client/main');
    }

    public function proyek($idProyek = null, $idProgress = null)
    {
        if ($idProyek && $idProgress) {
            return view('dashboard/client/detail_proyek');
        } else if ($idProyek) {
            return view('dashboard/client/proyek');
        }
        return view('dashboard/client/daftar_proyek');
    }

    public function pembayaran()
    {
        return view('dashboard/client/pembayaran');
    }

    public function profile()
    {
        return view('dashboard/client/profile');
    }
}
