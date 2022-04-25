<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EspaceProController extends BaseController
{
    public function index()
    {
        return view("espaces/pro/espace_pro");
    }
    public function planningPro()
    {
        echo view("espaces/pro/planningPro");
    }
    public function facturesPro()
    {
        echo view("espaces/pro/facturesPro");
    }
    public function relancesPro()
    {
        echo view("espaces/pro/relancesPro");
    }
    public function enfantsPro()
    {
        echo view("espaces/pro/enfantsPro");
    }
    public function profilPro()
    {
        echo view("espaces/pro/profilPro");
    }
}

