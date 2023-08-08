<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\ObatModel;

class Obat extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->obatModel = new ObatModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function index()
    {
        // $data['title'] = 'Data Master';
        $data['obat'] = $this->obatModel->get()->getResultArray();

        return view('obat/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $this->obatModel
                ->set('nama', $this->request->getVar('nama'))
                ->set('harga', $this->request->getVar('harga'))
                ->set('stok', $this->request->getVar('stok'))
                ->set('expired', $this->request->getVar('expired'))
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('/obat'));
        }
        return view('obat/tambah');
    }

    public function edit($id)
    {
        $data['o'] = $this->obatModel->where('id_obat', $id)->get()->getRowArray();
        if ($this->request->getVar('submit')) {
            $this->obatModel
                ->set('nama', $this->request->getVar('nama'))
                ->set('harga', $this->request->getVar('harga'))
                ->set('stok', $this->request->getVar('stok'))
                ->set('expired', $this->request->getVar('expired'))
                ->where('id_obat', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/obat'));
        }
        return view('obat/edit', $data);
    }

    public function hapus($id)
    {
        $this->obatModel->where('id_obat', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to(base_url('/obat'));
    }
}
