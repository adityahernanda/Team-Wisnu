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
            return view('dashboard/client/detail_progress');
        } else if ($idProyek) {
            return view('dashboard/client/progress');
        }
        return view('dashboard/client/proyek');
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
