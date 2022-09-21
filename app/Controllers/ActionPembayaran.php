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
        $terbayar = $this->modelPembayaran->getTerbayarByIdProyek($id);
        $anggaran = $this->modelProyek->getAnggaranByIdProyek($id);
        return json_encode([
            "anggaran" => $anggaran,
            "terbayar" => $terbayar,
            "kekurangan" => strval($anggaran - $terbayar)
        ]);
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
}
