<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Randomforest extends BaseController
{
    public function index()
    {
        return view('predict/u_randomforest');
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
        $dataset = 'randomforest';
        $id_user = $this->request->getVar('id_user');

        $this->predictModel->save([
            'name' => $namadata,
            'algoritma' => $dataset,
            'id_user' => $id_user,
            'banding' => $prediksi,
            'banding2' => $prediksi2
        ]);

        return redirect()->to(base_url('randomforest/predict'));
    }

    public function predict()
    {
        $prediksi = history('randomforest')->banding;
        $prediksi2 = history('randomforest')->banding2;

        if ($prediksi == 'neighbors' && $prediksi2 == 'treeboosting') {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\randomall.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('randomforest/result3'));
        } elseif ($prediksi == 'neighbors') {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\randomxneigh.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('randomforest/result2'));
        } elseif ($prediksi2 == 'treeboosting') {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\randomxboosting.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('randomforest/result22'));
        } else {
            $dir =  "python C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\randomforest.py";
            $output = shell_exec($dir);
            return redirect()->to(base_url('randomforest/result'));
        }
    }

    public function result()
    {
        $hasil = history('randomforest')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        // $data['show'] = $hasil2;
        // dd($hasil);
        $data = [
            'alg' => 'randomforest',
            'algoritma' => 'Random Forest',
            'show'  => $hasil2
        ];

        return view('pages/result', $data);
    }

    public function result2()
    {
        $hasil = history('randomforest')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        // $data['show'] = $hasil2;
        // dd($hasil);
        $data = [
            'alg' => 'randomforest',
            'algoritma' => 'Random Forest',
            'algoritma2' => 'K-Neighbors',
            'show'  => $hasil2
        ];

        return view('pages/result2', $data);
    }

    public function result22()
    {
        $hasil = history('randomforest')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        // $data['show'] = $hasil2;
        // dd($hasil);
        $data = [
            'alg' => 'randomforest',
            'algoritma' => 'Random Forest',
            'algoritma2' => 'Gradint Tree Boosting',
            'show'  => $hasil2
        ];

        return view('pages/result2', $data);
    }

    public function result3()
    {
        // $hasil = $this->predictModel->where('algoritma', 'neighbors')->get()->getLastRow();
        // $hasil2 = $this->$hasil->findColumn('result');
        $hasil = history('randomforest')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        // $data['show'] = $hasil2;
        // dd($hasil);
        $data = [
            'alg' => 'randomforest',
            'algoritma' => 'Random Forest',
            'algoritma2' => 'K-Neighbors',
            'algoritma3' => 'Gradient Tree Boosting',
            'show'  => $hasil2
        ];

        return view('pages/result3', $data);
    }
}
