<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\PasienModel;

class Pasien extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->pasienModel = new PasienModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        // $data['title'] = 'Data Master';
        $data['pasien'] = $this->pasienModel->get()->getResultArray();

        return view('pasien/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $this->pasienModel
                ->set('nik', $this->request->getVar('nik'))
                ->set('nama', $this->request->getVar('nama'))
                ->set('tempat_lahir', $this->request->getVar('tempat_lahir'))
                ->set('tanggal_lahir', $this->request->getVar('tanggal_lahir'))
                ->set('jenis_kelamin', $this->request->getVar('jenis_kelamin'))
                ->set('telepon', $this->request->getVar('telepon'))
                ->set('email', $this->request->getVar('email'))
                ->set('alamat', $this->request->getVar('alamat'))
                ->set('username', $this->request->getVar('username'))
                ->set('password', $this->request->getVar('password'))
                ->set('level', 'pasien')
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('pasien'));
        }
        return view('pasien/tambah');
    }

    public function edit($id)
    {
       $data['p'] = $this->pasienModel->where('id_pasien', $id)->get()->getRowArray();
       
        if ($this->request->getVar('submit')) {
            $this->pasienModel
                ->set('nik', $this->request->getVar('nik'))
                ->set('nama', $this->request->getVar('nama'))
                ->set('tempat_lahir', $this->request->getVar('tempat_lahir'))
                ->set('tanggal_lahir', $this->request->getVar('tanggal_lahir'))
                ->set('jenis_kelamin', $this->request->getVar('jenis_kelamin'))
                ->set('telepon', $this->request->getVar('telepon'))
                ->set('email', $this->request->getVar('email'))
                ->set('alamat', $this->request->getVar('alamat'))
                ->set('username', $this->request->getVar('username'))
                ->set('password', $this->request->getVar('password'))
                ->where('id_pasien', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/pasien'));
        }
        return view('pasien/edit', $data);
    }

    public function hapus($id)
    {
        $this->pasienModel->where('id_pasien', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to(base_url('/pasien'));
    }
}
