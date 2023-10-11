<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Expr\ShellExec;

class Neighbors extends BaseController
{

    public function index()
    {
        return view('predict/u_neighbors');
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
        $dataset = 'neighbors';
        $cek = $berkas->getName();
        $hari = date('Y-m-d');
        // dd($hari);
        if (!empty($this->predictModel->where(['algoritma' => $dataset])->getAll())) {
            $lihat = $this->predictModel->where(['algoritma' => 'neighbors'])->getAll();
            dd($lihat);
            $result = preg_replace("/[^a-zA-Z]/", "", $lihat);
            // dd($result);
            if ($cek == $result) {
                return redirect()->back()->withInput();
            }
        }
        $berkas->move('machine/berkas/');
        $namadata = $berkas->getName();
        $id_user = $this->request->getVar('id_user');

        $this->predictModel->save([
            'name' => $namadata,
            'algoritma' => $dataset,
            'id_user' => $id_user,
            'banding' => $prediksi,
            'banding2' => $prediksi2
        ]);

        return redirect()->to(base_url('neighbors/predict'));
    }

    public function predict()
    {
        // $in = $this->session->flashdata('in');

        // $prediksi = $this->request->getVar('prediksi');
        // dd($in);
        $prediksi = history('neighbors')->banding;
        $prediksi2 = history('neighbors')->banding2;
        // dd($prediksi);
        if ($prediksi == 'randomforest' && $prediksi2 == 'treeboosting') {
            $dirs = escapeshellcmd("C:\Users\moan\AppData\Local\Programs\Python\Python310\python.exe C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\neighall.py");
            $output = shell_exec($dirs);
            return redirect()->to(base_url('neighbors/result3'));
        } elseif ($prediksi == 'randomforest') {
            $dirs = escapeshellcmd("C:\Users\moan\AppData\Local\Programs\Python\Python310\python.exe C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\neighxrandom.py");
            $output = shell_exec($dirs);
            return redirect()->to(base_url('neighbors/result2'));
        } elseif ($prediksi2 == 'treeboosting') {
            $dirs = escapeshellcmd("C:\Users\moan\AppData\Local\Programs\Python\Python310\python.exe C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\neighxboosting.py");
            $output = shell_exec($dirs);
            return redirect()->to(base_url('neighbors/result22'));
        } else {
            $dirs = escapeshellcmd("C:\Users\moan\AppData\Local\Programs\Python\Python310\python.exe C:\\xampp\\htdocs\\proyekakhir\\public\\machine\\neighbors.py");
            $output = shell_exec($dirs);
            return redirect()->to(base_url('neighbors/result'));
        }
        // dd($output);

    }

    public function result()
    {
        $hasil = history('neighbors')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        // $data['show'] = $hasil2;
        // dd($hasil);
        $data = [
            'alg' => 'neighbors',
            'algoritma' => 'K-Nearest Neighbors',
            'algoritma2' => 'Random Forest',
            'show'  => $hasil2
        ];


        return view('pages/result', $data);
    }
    public function result2()
    {
        $hasil = history('neighbors')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        // $data['show'] = $hasil2;
        // dd($hasil);
        $data = [
            'alg' => 'neighbors',
            'algoritma' => 'K-Nearest Neighbors',
            'algoritma2' => 'Random Forest',
            'show'  => $hasil2
        ];


        return view('pages/result2', $data);
    }
    public function result22()
    {
        $hasil = history('neighbors')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        $data = [
            'alg' => 'neighbors',
            'algoritma' => 'K-Nearest Neighbors',
            'algoritma2' => 'Gradient Tree Boosting',
            'show'  => $hasil2
        ];


        return view('pages/result2', $data);
    }
    public function result3()
    {
        $hasil = history('neighbors')->result;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $hasil);
        $hasil2 = $spreadsheet->getActiveSheet()->toArray();
        $data = [
            'alg' => 'neighbors',
            'algoritma' => 'K-Nearest Neighbors',
            'algoritma2' => 'Random Forest',
            'algoritma3' => 'Gradient Tree Boosting',
            'show'  => $hasil2
        ];

        return view('pages/result3', $data);
    }
}
