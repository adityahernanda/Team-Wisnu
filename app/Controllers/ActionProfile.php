<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataAdminModel;
use App\Models\DataClientModel;

class ActionProfile extends BaseController
{
    protected $adminModel;
    protected $clientModel;
    public function __construct()
    {
        $this->adminModel = new DataAdminModel();
        $this->clientModel = new DataClientModel();
    }

    public function editClientById()
    {
        $id = $this->request->getVar('id');
        $pass = $this->request->getVar('pass');
        $email = $this->request->getVar('email');
        $hp = $this->request->getVar('hp');

        $this->clientModel->editUserById(
            $id,
            $pass,
            $email,
            $hp
        );
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/client/profile');
    }

    public function editAdminById()
    {
        $id = $this->request->getVar('id');
        $pass = $this->request->getVar('pass');
        $email = $this->request->getVar('email');
        $hp = $this->request->getVar('hp');

        $this->adminModel->editUserById(
            $id,
            $pass,
            $email,
            $hp
        );
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/' . $_SESSION['role'] . '/profile');
    }
}
