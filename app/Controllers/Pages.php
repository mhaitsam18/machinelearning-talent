<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{


    public function index()
    {

        return redirect()->to('pages/dashboard');
    }

    public function dashboard()
    {
        return view('pages/dashboard');
    }

    public function template()
    {
        return view('pages/template');
    }


    public function documentation()
    {
        return view('pages/documentation');
    }
}
