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
            return json_encode([
                "data" => $this->model->getProgressByIdProyek($idProyek)
            ]);
        }
        // return json_encode([
        //     "data" => $this->model->getProgress()
        // ]);
    }
}
