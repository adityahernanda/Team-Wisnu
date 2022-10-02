<?php

namespace App\Controllers;

use App\Models\PortofolioModel;

class Home extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new PortofolioModel();
    }

    public function index()
    {
        $porto = $this->model->getPortofolio();
        $data = [
            'porto' => $porto
        ];
        return view('landing_page', $data);
    }
}
