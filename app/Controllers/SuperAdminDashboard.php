<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataAdminModel;
use App\Models\DataClientModel;
use App\Models\FotoModel;
use App\Models\ProyekModel;

class SuperAdminDashboard extends BaseController
{
    protected $proyekModel;
    protected $adminModel;
    protected $clientModel;
    protected $fotoModel;
    public function __construct()
    {
        $this->proyekModel = new ProyekModel();
        $this->adminModel = new DataAdminModel();
        $this->clientModel = new DataClientModel();
        $this->fotoModel = new FotoModel();
    }

    public function index()
    {
        $data = [
            "title" => "Dashboard",
            "proyek" => $this->proyekModel->getProyekWithOwner(),
            "admin" => sizeof($this->adminModel->getUsers()),
            "client" => sizeof($this->clientModel->getUsers()),
        ];
        return viewSA('dashboard/super/main', $data);
    }

    public function proyek($idProyek = null, $idProgress = null)
    {
        $data = [
            "title" => "Proyek",
        ];
        if ($idProyek && $idProgress) {
            $progress = $this->proyekModel->getProgressById($idProgress);
            $foto = $this->fotoModel->getFotoByProgressId($idProgress);
            $data = [
                "title" => "Detail Progress",
                'progress' => $progress,
                'foto' => $foto,
            ];
            return viewSA('dashboard/super/detail_progress', $data);
        } else if ($idProyek) {
            $data = [
                "title" => "Progress",
            ];
            return viewSA('dashboard/super/progress', $data);
        }
        return viewSA('dashboard/super/proyek', $data);
    }

    public function formProyek($idProyek = null)
    {
        $admin = $this->adminModel->getUsers();
        $users = $this->clientModel->getUsers();
        $data = [
            "title" => "Form Proyek",
            'admin' => $admin,
            'users' => $users,
        ];
        if ($idProyek) {
            $proyek = $this->proyekModel->getProyekById($idProyek);
            $data['proyek'] = $proyek;
        }
        return viewSA('dashboard/super/form_proyek', $data);
    }

    public function pembayaran($idProyek = null)
    {
        $data = [
            "title" => "Pembayaran",
        ];
        if ($idProyek) {
            $proyek = $this->proyekModel->getProyekById($idProyek);
            $data['proyek'] = $proyek;
            return viewSA('dashboard/super/pembayaran_proyek', $data);
        }
        return viewSA('dashboard/super/pembayaran', $data);
    }

    public function portofolio()
    {
        $data = [
            "title" => "Portofolio",
        ];
        return viewSA('dashboard/super/portofolio', $data);
    }

    public function pengguna()
    {
        $data = [
            "title" => "Pengguna",
        ];
        return viewSA('dashboard/super/pengguna', $data);
    }

    public function profile()
    {
        $profile = $this->adminModel->getUserDataById($_SESSION['id']);
        $data = [
            "title" => "Profile",
            "profile" => $profile,
        ];
        return viewSA('dashboard/super/profile', $data);
    }
}
