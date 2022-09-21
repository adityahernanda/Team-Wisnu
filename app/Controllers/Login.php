<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataAdminModel;
use App\Models\DataClientModel;
use App\Models\LoginAdminModel;
use App\Models\LoginClientModel;

class Login extends BaseController
{
    protected $loginClientModel;
    protected $loginAdminModel;
    protected $dataClient;
    protected $dataAdmin;

    public function __construct()
    {
        $this->loginClientModel = new LoginClientModel();
        $this->loginAdminModel = new LoginAdminModel();
        $this->dataClient = new DataClientModel();
        $this->dataAdmin = new DataAdminModel();
    }

    public function index()
    {
        return view('login');
    }

    public function loginClient()
    {
        $email = $this->request->getVar('email');
        $pass = $this->request->getVar('pass');

        $login = $this->loginClientModel->verifyUser(
            $email,
            $pass
        );

        if ($login) {
            $user = $this->dataClient->getUserDataByEmail($email);
            $_SESSION['id'] = $user->id_customer;
            $_SESSION['nama'] = $user->nama;
            $_SESSION['role'] = "client";
            $this->response->redirect('/dashboard/client');
        } else {
            session()->setFlashdata('error', true);
            $this->response->redirect('/');
        }
    }

    public function loginAdmin()
    {
        $email = $this->request->getVar('email');
        $pass = $this->request->getVar('pass');

        $login = $this->loginAdminModel->verifyUser(
            $email,
            $pass
        );

        if ($login) {
            $akses = $this->loginAdminModel->getAksesByEmail($email);
            $user = $this->dataAdmin->getUserDataByEmail($email);
            $_SESSION['id'] = $user->id_admin;
            $_SESSION['nama'] = $user->nama;
            if ($akses == 0) {
                $_SESSION['role'] = "sa";
                $this->response->redirect('/dashboard/sa');
            } else if ($akses == 1) {
                $_SESSION['role'] = "admin";
                $this->response->redirect('/dashboard/admin');
            }
        } else {
            session()->setFlashdata('error', true);
            $this->response->redirect('/login');
        }
    }

    public function logout()
    {
        session_destroy();
        $this->response->redirect('/');
    }
}
