<?php

namespace App\Controllers;

use App\Models\CreateModel;
use App\Controllers\BaseController;

class Models extends BaseController
{
    function __construct()
    {
        $this->model = new CreateModel();
    }

    public function index()
    {
        $data['models'] = $this->model->findAll();
        return view('model/index', $data);
    }

    public function new()
    {
        $data = [
            'validation' => \config\Services::validation(),

        ];
        return view('model/new', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'model' => [
                'rules' => 'uploaded[model]|max_size[model,5048]',
                'errors' => [
                    'uploaded' => 'must be uploaded',
                    'ext_in' => 'extension must be SAV',
                    'max_size' => 'max Size 5 MB',
                ]
                // |ext_in[model,sav]
            ],
            'type' => [
                'required',
                'errors' => [
                    'required' => 'type must be selected'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $name = $this->request->getFile('model');
        $name->move('machine/model');
        $namaModel = $name->getName();
        $type = $this->request->getVar('type');

        $this->model->save([
            'name' => $namaModel,
            'type' => $type
        ]);

        session()->setFlashdata('seccess', 'upload successful');

        return redirect()->to(base_url('models'));
    }

    public function delete($id = null)
    {

        $this->model->where('id', $id)->delete();
        return redirect()->to(base_url('models'))->with('message', 'File deleted successfully');
    }
}
