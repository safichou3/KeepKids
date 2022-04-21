<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EspaceParentsController extends BaseController
{
    protected $enfantsModel;

    public function __construct()
    {
        $this->enfantsModel = model(EnfantsModel::class);
    }
    public function index()
    {
        return view("espaces/parents/espace_parents");
    }

    function mesEnfants()
    {
        $enfant = $this->enfantsModel->findAll();
        $data = [
            "enfant" => $enfant
        ];

        echo view("espaces/parents/mesEnfants", $data);
    }
}
