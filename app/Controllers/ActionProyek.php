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

    public function addProyek()
    {
        $id_customer = $this->request->getVar('id_customer');
        $id_admin = $this->request->getVar('id_admin');
        $nama = $this->request->getVar('nama');
        $lokasi = $this->request->getVar('lokasi');
        $biaya = $this->request->getVar('biaya');
        $tgl_mulai = $this->request->getVar('tgl_mulai');
        $tgl_selesai = $this->request->getVar('tgl_selesai');
        $rab = $this->request->getFile('rab');

        $rabName = uploadFile($rab, 'rab');

        $this->model->addProyek(
            $id_customer,
            $id_admin,
            $nama,
            $lokasi,
            $biaya,
            $tgl_mulai,
            $tgl_selesai,
            $rabName
        );
        $this->response->redirect('/dashboard/sa/proyek');
    }

    public function editProyek()
    {
        $id = $this->request->getVar('id');
        $id_customer = $this->request->getVar('id_customer');
        $id_admin = $this->request->getVar('id_admin');
        $nama = $this->request->getVar('nama');
        $lokasi = $this->request->getVar('lokasi');
        $biaya = $this->request->getVar('biaya');
        $tgl_mulai = $this->request->getVar('tgl_mulai');
        $tgl_selesai = $this->request->getVar('tgl_selesai');
        $rab = $this->request->getFile('rab');

        if ($rab->getError() != 4) {
            $oldRab = $this->model->getProyekById($id)->rab;
            $rabName = editFile($rab, 'rab', $oldRab);
            $this->model->editProyek(
                $id,
                $id_customer,
                $id_admin,
                $nama,
                $lokasi,
                $biaya,
                $tgl_mulai,
                $tgl_selesai,
                $rabName
            );
        } else {
            $this->model->editProyek(
                $id,
                $id_customer,
                $id_admin,
                $nama,
                $lokasi,
                $biaya,
                $tgl_mulai,
                $tgl_selesai
            );
        }
        $this->response->redirect('/dashboard/sa/proyek');
    }

    public function getProyekWithOwner()
    {
        $proyek = $this->model->getProyekWithOwner();
        return json_encode([
            "data" => $proyek
        ]);
    }

    public function getProyekWithOwnerSelesai()
    {
        $proyek = $this->model->getProyekWithOwnerSelesai();
        return json_encode([
            "data" => $proyek
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

    // ADMIN PAKAI
    public function getProyekByIdAdmin()
    {
        $idAdmin = $this->request->getVar('id');
        return json_encode([
            "data" => $this->model->getProyekByIdAdmin($idAdmin)
        ]);
    }

    public function getProgressByIdProyek()
    {
        $idProyek = $this->request->getVar('id');
        if ($idProyek) {
            $progress = $this->model->getProgressByIdProyek($idProyek);
            $admin = $this->model->getProyekAdminById($idProyek);
            if ($admin == $_SESSION['id'] || $_SESSION['role'] == "sa") {
                return json_encode([
                    "data" => $progress
                ]);
            }
        }
    }

    public function updateStatus()
    {
        $id = $this->request->getVar('id');
        $selesai = $this->request->getVar('selesai');
        $cancelled = $this->request->getVar('cancelled');

        $status = "";
        if (isset($selesai)) {
            $status = "Selesai";
        } else if (isset($cancelled)) {
            $status = "Cancelled";
        }

        $this->model->updateStatusByProyekId(
            $id,
            $status
        );
        $this->response->redirect('/dashboard/sa/proyek');
    }
}
