<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\DiagnosaModel;

class Diagnosa extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->diagnosaModel = new DiagnosaModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function index()
    {
        // $data['title'] = 'Data Master';
        $data['diagnosa'] = $this->diagnosaModel->get()->getResultArray();

        return view('diagnosa/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $this->diagnosaModel
                ->set('keterangan', $this->request->getVar('keterangan'))
                ->set('standar', 'Standar Kemenkes')->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to('/diagnosa');
        }
        return view('diagnosa/tambah');
    }

    public function edit($id)
    {
        $data['d'] = $this->diagnosaModel->where('id_diagnosa', $id)->get()->getRowArray();
        if ($this->request->getVar('submit')) {
            $this->diagnosaModel
                ->set('keterangan', $this->request->getVar('keterangan'))
                ->where('id_diagnosa', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to('/diagnosa');
        }
        return view('diagnosa/edit', $data);
    }

    public function hapus($id)
    {
        $this->diagnosaModel->where('id_diagnosa', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/diagnosa');
    }
}
