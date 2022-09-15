<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/admin/main');
    }

    public function proyek($idOwner = null, $idProyek = null, $idProgress = null)
    {
        if ($idOwner && $idProyek && $idProgress) {
            return view('dashboard/admin/detail_progress');
        } else if ($idOwner && $idProyek) {
            return view('dashboard/admin/progress');
        } else if ($idOwner) {
            return view('dashboard/admin/proyek');
        }
        return view('dashboard/admin/owner_proyek');
    }

    public function profile()
    {
        return view('dashboard/admin/profile');
    }
}
