<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index()
    {
        return viewAdmin('dashboard/admin/main');
    }

    public function proyek($idOwner = null, $idProyek = null, $idProgress = null)
    {
        if ($idOwner && $idProyek && $idProgress) {
            return viewAdmin('dashboard/admin/detail_progress');
        } else if ($idOwner && $idProyek) {
            return viewAdmin('dashboard/admin/progress');
        } else if ($idOwner) {
            return viewAdmin('dashboard/admin/proyek');
        }
        return viewAdmin('dashboard/admin/owner_proyek');
    }

    public function profile()
    {
        return viewAdmin('dashboard/admin/profile');
    }
}
