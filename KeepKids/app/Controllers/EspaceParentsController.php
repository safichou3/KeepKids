<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EspaceParentsController extends BaseController
{
    public function index()
    {
        return view("espaces/espace_parents");
    }
}
