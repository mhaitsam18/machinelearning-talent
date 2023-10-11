<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Result extends BaseController
{
    public function index()
    {
        //
    }

    public function history()
    {
        $data['berkas'] = $this->predictModel->getAll();

        return view('pages/history', $data);
    }

    public function delete($id = null)
    {
        $this->predictModel->delete($id);
        return redirect()->to(base_url('history'))->with('message', 'File deleted successfully');
    }

    function download($id)
    {
        $data = $this->predictModel->find($id);
        return $this->response->download('machine/hasil/' . $data['result'], null);
    }

    public function show($id = null)
    {
        $result = $this->predictModel->where(['id' => $id])->findColumn('result');
        $algo = $this->predictModel->where(['id' => $id])->findColumn('algoritma');
        $name = $this->predictModel->where(['id' => $id])->findColumn('name');
        // $hasil = $coba;

        //untuk convert array to string
        $con = implode("|", $result);
        $algoritma = implode("|", $algo);
        $name = implode("|", $name);

        $prediksi = history($algoritma)->banding;
        $prediksi2 = history($algoritma)->banding2;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load('machine/hasil/' . $con);
        $hasil = $spreadsheet->getActiveSheet()->toArray();
        $data = [
            'show' => $hasil,
            'algo' => $algoritma,
            'algo2' => $prediksi,
            'algo3' => $prediksi2,
            'nm' => $name
        ];

        if ($prediksi != null && $prediksi2 != null) {
            return view('pages/show3', $data);
        } elseif ($prediksi != null) {
            return view('pages/show2', $data);
        } elseif ($prediksi2 != null) {
            return view('pages/show2', $data);
        } else {
            return view('pages/show', $data);
        }
    }
}
