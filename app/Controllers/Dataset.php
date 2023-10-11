<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dataset extends BaseController
{

    public function index()
    {
        $data['berkas'] = $this->predictModel->getAll();

        return view('pages/dataset', $data);
    }


    public function delete($id = null)
    {
        $this->predictModel->delete($id);
        return redirect()->to(base_url('dataset'))->with('message', 'File deleted successfully');
    }

    function download($id)
    {
        $data = $this->predictModel->find($id);
        return $this->response->download('machine/berkas/' . $data['name'], null);
    }
}
