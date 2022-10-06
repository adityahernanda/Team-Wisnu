<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataClientModel;
use App\Models\FotoModel;
use App\Models\PembayaranModel;
use App\Models\ProyekModel;

class ClientDashboard extends BaseController
{
    protected $modelProyek;
    protected $modelPembayaran;
    protected $modelFoto;
    protected $modelClient;
    public function __construct()
    {
        $this->modelProyek = new ProyekModel();
        $this->modelPembayaran = new PembayaranModel();
        $this->modelFoto = new FotoModel();
        $this->modelClient = new DataClientModel();
    }

    public function index()
    {
        $proyek = $this->modelProyek->getProyekByIdCustomer($_SESSION['id']);
        $data = [
            "title" => "Dashboard",
            "proyek" => $proyek
        ];
        return viewClient('dashboard/client/main', $data);
    }

    public function proyek($idProyek = null, $idProgress = null)
    {
        $data = [
            "title" => "Proyek",
        ];
        if ($idProyek && $idProgress) {
            $progress = $this->modelProyek->getProgressById($idProgress);
            if ($progress && $idProyek == $progress->id_proyek) {
                $foto = $this->modelFoto->getFotoByProgressId($idProgress);
                $data = [
                    "title" => "Detail Progress",
                    'progress' => $progress,
                    'foto' => $foto
                ];
                return viewClient('dashboard/client/detail_progress', $data);
            } else {
                return $this->response->redirect('/dashboard/client/proyek/' . $idProyek);
            }
        } else if ($idProyek) {
            $data = [
                "title" => "Progress",
            ];
            return viewClient('dashboard/client/progress', $data);
        }
        return viewClient('dashboard/client/proyek', $data);
    }

    public function pembayaran()
    {
        $proyek = $this->modelProyek->getProyekByIdCustomer($_SESSION['id']);
        $data = [
            "title" => "Pembayaran",
            "proyek" => $proyek
        ];
        return viewClient('dashboard/client/pembayaran', $data);
    }

    public function profile()
    {
        $profile = $this->modelClient->getUserDataById($_SESSION['id']);
        $data = [
            "title" => "Profile",
            "profile" => $profile,
        ];
        return viewClient('dashboard/client/profile', $data);
    }
}
