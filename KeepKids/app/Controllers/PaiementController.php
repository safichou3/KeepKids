<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaiementController extends BaseController
{
    public function indexPaiement()
    {
        return view("paiement/index_paiement");
    }
    public function paiement()
    {
        return view("paiement/paiement");
    }
}
