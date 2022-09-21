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
        $proyek = $this->modelProyek->getProyekByIdCustomer($_SESSION['id']);
        $data = [
            "proyek" => $proyek
        ];
        return viewClient('dashboard/client/main', $data);
    }

    public function proyek($idProyek = null, $idProgress = null)
    {
        if ($idProyek && $idProgress) {
            $data = [
                'progress' => $this->modelProyek->getProgressById($idProgress)
            ];
            return viewClient('dashboard/client/detail_progress', $data);
        } else if ($idProyek) {
            return viewClient('dashboard/client/progress');
        }
        return viewClient('dashboard/client/proyek');
    }

    public function pembayaran()
    {
        $proyek = $this->modelProyek->getProyekByIdCustomer($_SESSION['id']);
        $data = [
            "proyek" => $proyek
        ];
        return viewClient('dashboard/client/pembayaran', $data);
    }

    public function profile()
    {
        return viewClient('dashboard/client/profile');
    }
}
