<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use App\Models\ProyekModel;

class ClientDashboard extends BaseController
{
    protected $modelProyek;
    protected $modelPembayaran;
    public function __construct()
    {
        $this->modelProyek = new ProyekModel();
        $this->modelPembayaran = new PembayaranModel();
    }

    public function index()
    {
        return view('dashboard/client/main');
    }

    public function proyek($idProyek = null, $idProgress = null)
    {
        if ($idProyek && $idProgress) {
            $data = [
                'progress' => $this->modelProyek->getProgressById($idProgress)
            ];
            return view('dashboard/client/detail_progress', $data);
        } else if ($idProyek) {
            return view('dashboard/client/progress');
        }
        return view('dashboard/client/proyek');
    }

    public function pembayaran()
    {
        $proyek = $this->modelProyek->getProyekByIdCustomer('cust-123');
        $data = [
            "proyek" => $proyek
        ];
        return view('dashboard/client/pembayaran', $data);
    }

    public function profile()
    {
        return view('dashboard/client/profile');
    }
}
