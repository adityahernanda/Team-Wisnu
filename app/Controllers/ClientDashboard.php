<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClientDashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/client/main');
    }

    public function proyek($id = null)
    {
        if ($id) {
            return view('dashboard/client/detail_proyek');
        }
        return view('dashboard/client/proyek');
    }

    public function rab()
    {
        return view('dashboard/client/rab');
    }
}
