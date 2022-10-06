<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PortofolioModel;

class ActionPortofolio extends BaseController
{

    protected $model;
    public function __construct()
    {
        $this->model = new PortofolioModel();
    }

    public function addPortofolio()
    {
        $gbr = $this->request->getFile('gambar');
        $ket = $this->request->getVar('ket');

        $gbrName = uploadFile($gbr, 'portofolio');
        $this->model->addPortofolio(
            $gbrName,
            $ket
        );
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/sa/portofolio');
    }

    public function getPortofolio()
    {
        $porto = $this->model->getPortofolio();
        return json_encode([
            "data" => $porto
        ]);
    }

    public function editPortofolio()
    {
        $id = $this->request->getVar('id');
        $gbr = $this->request->getFile('gambar');
        $ket = $this->request->getVar('ket');
        $oldGbr = $this->model->getPortofolioById($id)->url_gambar;

        if ($gbr->getError() != 4) {
            $gbrName = editFile($gbr, 'portofolio', $oldGbr);
            $this->model->editPortofolio(
                $id,
                $ket,
                $gbrName
            );
        } else {
            $this->model->editPortofolio(
                $id,
                $ket
            );
        }
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/sa/portofolio');
    }

    public function deletePortofolio()
    {
        $id = $this->request->getVar('id');
        $porto = $this->model->getPortofolioById($id);
        deleteFile('portofolio', $porto->url_gambar);

        $this->model->deletePortofolio(
            $id
        );
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/sa/portofolio');
    }
}
