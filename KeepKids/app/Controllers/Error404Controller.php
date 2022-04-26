<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Error404Controller extends BaseController
{
    public function Error404()
    {
        return view("Error");
    }

    public function Error()
    {
        return view("404");
    }
}
