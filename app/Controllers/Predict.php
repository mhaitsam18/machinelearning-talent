<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Predict extends BaseController
{
    public function index()
    {
        return view('pages/predict');
    }

    public function option()
    {
        if (!$this->validate([
            'model' => [
                'required',
                'errors' => [
                    'required' => 'choice algorithm to used'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $options = $this->request->getVar('model');

        return redirect()->to(base_url($options));
    }

    public function randomforest()
    {

        return view('predict/randomforest');
    }

    public function treeboosting()
    {

        return view('predict/treeboosting');
    }

    public function neighbors()
    {

        return view('predict/neighbors');
    }
}
