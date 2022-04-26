<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccueilController extends BaseController
{
    public function index()
    {
        return view("accueil/accueil");
    }
    public function mentionsL()
    {
        return view("accueil/mentions_legales");
    }
}
