<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProyekModel;

class ActionProyek extends BaseController
{

    protected $model;
    public function __construct()
    {
        $this->model = new ProyekModel();
    }

    public function getCardData()
    {
        $id = $this->request->getVar('id_proyek');
        $proyek = $this->model->getProyekById($id);

        $now = date_create();
        $tgl_selesai = date_create($proyek->tgl_selesai);
        $sisa = date_diff($now, $tgl_selesai)->format("%a");
        return json_encode([
            "tgl_mulai" => $proyek->tgl_mulai,
            "tgl_akhir" => $proyek->tgl_selesai,
            "sisa" => $sisa,
            "lokasi" => $proyek->lokasi_proyek,
        ]);
    }

    public function getProyek($idCustomer = null)
    {
        if ($idCustomer) {
            return json_encode([
                "data" => $this->model->getProyekByIdCustomer($idCustomer)
            ]);
        }
        return json_encode([
            "data" => $this->model->getProyek()
        ]);
    }

    public function getProgress($idProyek = null)
    {
        if ($idProyek) {
            $progress = $this->model->getProgressByIdProyek($idProyek);
            $owner = $this->model->getProyekOwnerById($idProyek);
            if ($owner == $_SESSION['id']) {
                return json_encode([
                    "data" => $progress
                ]);
            }
        }
        // return json_encode([
        //     "data" => $this->model->getProgress()
        // ]);
    }
}
