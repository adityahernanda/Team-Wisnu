<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataClientModel;

class ActionClient extends BaseController
{
    protected $clientModel;
    public function __construct()
    {
        $this->clientModel = new DataClientModel();
    }

    public function addClient()
    {
        $nama = $this->request->getVar('nama');
        $pass = $this->request->getVar('pass');
        $email = $this->request->getVar('email');
        $hp = $this->request->getVar('hp');

        $this->clientModel->addUser(
            $nama,
            $pass,
            $email,
            $hp
        );
        $this->response->redirect('/dashboard/sa/pengguna');
    }

    public function getClient()
    {
        $client = $this->clientModel->getUsers();
        return json_encode(
            ["data" => $client]
        );
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
        $this->response->redirect('/dashboard/sa/pengguna');
    }

    public function deleteClient()
    {
        $email = $this->request->getVar('email');
        $this->clientModel->deleteUserByEmail(
            $email
        );
        $this->response->redirect('/dashboard/sa/pengguna');
    }
}
