<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataAdminModel;

class ActionAdmin extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new DataAdminModel();
    }

    public function addAdmin()
    {
        $nama = $this->request->getVar('nama');
        $pass = $this->request->getVar('pass');
        $email = $this->request->getVar('email');
        $hp = $this->request->getVar('hp');

        $this->adminModel->addUser(
            $nama,
            $pass,
            $email,
            $hp
        );
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/sa/pengguna');
    }

    public function getAdmin()
    {
        $admin = $this->adminModel->getUsers();
        return json_encode(
            ["data" => $admin]
        );
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
        $this->response->redirect('/dashboard/sa/pengguna');
    }

    public function deleteAdmin()
    {
        $email = $this->request->getVar('email');
        $this->adminModel->deleteUserByEmail(
            $email
        );
        session()->setFlashdata("sukses", true);
        $this->response->redirect('/dashboard/sa/pengguna');
    }
}
