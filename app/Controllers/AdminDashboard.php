<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FotoModel;
use App\Models\ProyekModel;

class AdminDashboard extends BaseController
{
    protected $modelProyek;
    protected $modelFoto;

    public function __construct()
    {
        $this->modelProyek = new ProyekModel();
        $this->modelFoto = new FotoModel();
    }

    public function index()
    {
        $proyek = $this->modelProyek->getProyekByIdAdmin($_SESSION['id']);
        $data = [
            'proyek' => $proyek
        ];
        return viewAdmin('dashboard/admin/main', $data);
    }

    public function proyek($idProyek = null, $idProgress = null)
    {
        if ($idProyek && $idProgress) {
            $progress = $this->modelProyek->getProgressById($idProgress);
            $foto = $this->modelFoto->getFotoByProgressId($idProgress);
            $data = [
                'progress' => $progress,
                'foto' => $foto,
            ];
            return viewAdmin('dashboard/admin/detail_progress', $data);
        } else if ($idProyek) {
            $proyek =  $this->modelProyek->getProyekById($idProyek);
            $data = [
                'proyek' => $proyek
            ];
            return viewAdmin('dashboard/admin/progress', $data);
        }
        return viewAdmin('dashboard/admin/proyek');
    }

    public function formProgress($idProgress = null)
    {
        $progress = $this->modelProyek->getProgressById($idProgress);
        $data = [
            'progress' => $progress
        ];
        return viewAdmin('dashboard/admin/form_progress', $data);
    }

    public function profile()
    {
        return viewAdmin('dashboard/admin/profile');
    }
}
