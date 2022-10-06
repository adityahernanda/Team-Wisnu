<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FotoModel;
use App\Models\ProyekModel;

class ActionProyek extends BaseController
{

    protected $modelProyek;
    protected $modelFoto;
    public function __construct()
    {
        $this->modelProyek = new ProyekModel();
        $this->modelFoto = new FotoModel();
    }

    public function getCardData()
    {
        $id = $this->request->getVar('id_proyek');
        $proyek = $this->modelProyek->getProyekById($id);

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

        $this->modelProyek->addProyek(
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
            $oldRab = $this->modelProyek->getProyekById($id)->rab;
            $rabName = editFile($rab, 'rab', $oldRab);
            $this->modelProyek->editProyek(
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
            $this->modelProyek->editProyek(
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
        $proyek = $this->modelProyek->getProyekWithOwner();
        return json_encode([
            "data" => $proyek
        ]);
    }

    public function getProyekWithOwnerSelesai()
    {
        $proyek = $this->modelProyek->getProyekWithOwnerSelesai();
        return json_encode([
            "data" => $proyek
        ]);
    }

    public function getProyek($idCustomer = null, $status = null)
    {
        if ($idCustomer) {
            return json_encode([
                "data" => $this->modelProyek->getProyekByIdCustomer($idCustomer, $status)
            ]);
        }
        return json_encode([
            "data" => $this->modelProyek->getProyek()
        ]);
    }

    public function addProgress()
    {
        $idProyek = $this->request->getVar('id');
        $nama = $this->request->getVar('nama');
        $tgl = $this->request->getVar('tgl');
        $presentase = $this->request->getVar('presentase');
        $ket = $this->request->getVar('ket');

        $files = $this->request->getFileMultiple('gambar');
        $idProgress = $this->modelProyek->addProgressByIdProyek(
            $idProyek,
            $nama,
            $tgl,
            $presentase,
            $ket
        );

        foreach ($files as $file) {
            $imgName = uploadFile($file, 'progress');
            $this->modelFoto->addFoto($idProgress, $imgName);
        }

        $this->response->redirect('/dashboard/admin/proyek/' . $idProyek);
    }

    public function getProgress($idProyek = null)
    {
        if ($idProyek) {
            $progress = $this->modelProyek->getProgressByIdProyek($idProyek);
            $owner = $this->modelProyek->getProyekOwnerById($idProyek);
            if ($owner == $_SESSION['id']) {
                return json_encode([
                    "data" => $progress
                ]);
            }
        }
        // return json_encode([
        //     "data" => $this->modelProyek->getProgress()
        // ]);
    }

    public function editProgress()
    {
        $idProyek = $this->request->getVar('id');
        $idProgress = $this->request->getVar('id_progress');
        $nama = $this->request->getVar('nama');
        $tgl = $this->request->getVar('tgl');
        $presentase = $this->request->getVar('presentase');
        $ket = $this->request->getVar('ket');

        $idProgress = $this->modelProyek->editProgressById(
            $idProgress,
            $nama,
            $tgl,
            $presentase,
            $ket
        );

        $this->response->redirect('/dashboard/admin/proyek/' . $idProyek);
    }

    // ADMIN PAKAI
    public function getProyekByIdAdmin()
    {
        $idAdmin = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        return json_encode([
            "data" => $this->modelProyek->getProyekByIdAdmin($idAdmin, $status)
        ]);
    }

    public function getProgressByIdProyek()
    {
        $idProyek = $this->request->getVar('id');
        if ($idProyek) {
            $progress = $this->modelProyek->getProgressByIdProyek($idProyek);
            $admin = $this->modelProyek->getProyekAdminById($idProyek);
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

        $this->modelProyek->updateStatusByProyekId(
            $id,
            $status
        );
        $this->response->redirect('/dashboard/sa/proyek');
    }
}
