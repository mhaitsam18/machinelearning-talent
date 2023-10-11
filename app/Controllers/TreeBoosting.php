<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TreeBoosting extends BaseController
{
    public function index()
    {
        return view('predict/u_treeboosting');
    }

    public function create()
    {
        $prediksi = $this->request->getVar('prediksi');
        $prediksi2 = $this->request->getVar('prediksi2');
        if (!$this->validate([
            'data' => [
                'rules' => 'uploaded[data]|ext_in[data,xlsx]|max_size[data,10048]',
                'errors' => [
                    'uploaded' => 'must be uploaded',
                    'ext_in' => 'extension must be excel',
                    'max_size' => 'max Size 10 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $berkas = $this->request->getFile('data');
        $berkas->move('machine/berkas/');
        $namadata = $berkas->getName();
        $dataset = 'treeboosting';
        $id_user = $this->request->getVar('id_user');

        $this->predictModel->save([
            'name' => $namadata,
            'algoritma' => $dataset,
            'id_user' => $id_user,
            'banding' => $prediksi,
            'banding2' => $prediksi2
        ]);

        return redirect()->to(base_url('treeboosting/predict'));
    }

    public function predict()
    {
        $prediksi = history('treeboosting')->banding;
        $prediksi2 = history('treeboosting')->banding2;
        if ($prediksi == 'randomforest' && $prediksi2 == 'neighbors') {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\treeboostingall.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('treeboosting/result3'));
        } elseif ($prediksi == 'randomforest') {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\treeboostingxrandom.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('treeboosting/result2'));
        } elseif ($prediksi2 == 'neighbors') {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\treeboostingxneigh.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('treeboosting/result22'));
        } else {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\randomforest.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('treeboosting/result'));
        }
    }

    public function result()
    {
        $hasil = history('treeboosting')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();

        $data = [
            'alg' => 'treeboosting',
            'algoritma' => 'Gradient Tree Boosting',
            'show'  => $hasil2
        ];

        return view('pages/result', $data);
    }

    public function result2()
    {
        $hasil = history('treeboosting')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();

        $data = [
            'alg' => 'treeboosting',
            'algoritma' => 'Gradient Tree Boosting',
            'algoritma2' => 'Random Forest',
            'show'  => $hasil2
        ];

        return view('pages/result2', $data);
    }

    public function result22()
    {
        $hasil = history('treeboosting')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();

        $data = [
            'alg' => 'treeboosting',
            'algoritma' => 'Gradient Tree Boosting',
            'algoritma2' => 'K-Neighbors',
            'show'  => $hasil2
        ];

        return view('pages/result2', $data);
    }

    public function result3()
    {
        $hasil = history('treeboosting')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();

        $data = [
            'alg' => 'treeboosting',
            'algoritma' => 'Gradient Tree Boosting',
            'algoritma2' => 'Random Forest',
            'algoritma3' => 'K-Neighbors',
            'show'  => $hasil2
        ];

        return view('pages/result3', $data);
    }
}
