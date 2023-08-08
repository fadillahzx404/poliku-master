<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\TarifModel;

class Tarif extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->tarifModel = new TarifModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        // $data['title'] = 'Data Master';
        $data['tarif'] = $this->tarifModel->get()->getResultArray();

        return view('tarif/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $this->tarifModel
                ->set('upf', $this->request->getVar('upf'))
                ->set('nama_tindakan', $this->request->getVar('nama_tindakan'))
                ->set('perawatan', $this->request->getVar('perawatan'))
                ->set('tarif', $this->request->getVar('tarif'))
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to('/tarif');
        }
        return view('tarif/tambah');
    }

    public function edit($id)
    {
        $data['d'] = $this->tarifModel->where('id_tarif', $id)->get()->getRowArray();
        if ($this->request->getVar('submit')) {
            $this->tarifModel
                ->set('upf', $this->request->getVar('upf'))
                ->set('nama_tindakan', $this->request->getVar('nama_tindakan'))
                ->set('perawatan', $this->request->getVar('perawatan'))
                ->set('tarif', $this->request->getVar('tarif'))
                ->where('id_tarif', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to('/tarif');
        }
        return view('tarif/edit', $data);
    }

    public function hapus($id)
    {
        $this->tarifModel->where('id_tarif', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/tarif');
    }
}
