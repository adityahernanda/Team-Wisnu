<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use App\Models\ProyekModel;

class ActionPembayaran extends BaseController
{

    protected $modelPembayaran;
    protected $modelProyek;
    public function __construct()
    {
        $this->modelPembayaran = new PembayaranModel();
        $this->modelProyek = new ProyekModel();
    }


    public function getCardData()
    {
        $id = $this->request->getVar('id_proyek');
        $proyek = $this->modelProyek->getProyekById($id);
        $terbayar = $this->modelPembayaran->getTerbayarByIdProyek($id);
        $anggaran = $proyek->biaya;

        return json_encode([
            "proyek" => $proyek,
            "anggaran" => $anggaran,
            "terbayar" => $terbayar,
            "kekurangan" => strval($anggaran - $terbayar)
        ]);
    }

    public function addPembayaran()
    {
        $idProyek = $this->request->getVar('id_proyek');
        $jumlah = $this->request->getVar('jumlah');
        $ket = $this->request->getVar('ket');

        $this->modelPembayaran->addPembayaran(
            $idProyek,
            $jumlah,
            $ket,
        );
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/sa/pembayaran/' . $idProyek);
    }

    public function getPembayaranByIdProyek()
    {
        $pembayaran = $this->modelPembayaran->getPembayaranByIdProyek(
            $this->request->getVar('id_proyek')
        );
        return json_encode([
            "data" => $pembayaran
        ]);
    }

    public function deletePembayaranById()
    {
        $idProyek = $this->request->getVar('id_proyek');
        $id = $this->request->getVar('id');
        $this->modelPembayaran->deletePembayaranById($id);
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/sa/pembayaran/' . $idProyek);
    }
}
