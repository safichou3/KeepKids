<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccueilController extends BaseController
{
    public function index()
    {
        return view("accueil/accueil");
    }
}
