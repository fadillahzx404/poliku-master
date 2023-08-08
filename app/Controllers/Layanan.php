<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\LayananModel;

class Layanan extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->layananModel = new LayananModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function index(){

        $data['layanan'] = $this->layananModel->get()->getResultArray();

        $data['jumlah_active'] = $this->layananModel->where('active' ,1)->countAllResults();

        return view('layanan/index', $data);
    }

    public function tambah()
    {
        session();
        $validation = \Config\Services::validation();
            $errors = $validation->getErrors();
            $data = [
                'validation' => $validation,
                'errors' => $errors,
            ];
        return view('layanan/tambah', $data);
    }

    public function tambah_layanan()
    {
        
            // dd($this->request->getVar());
            if(!$this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Judul harus di isi',
                ],
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
            'required' => '{field} Deskripsi harus di isi'
    ],
        ],
        ])){
            $validation = \Config\Services::validation();
            $errors = $validation->getErrors();
            // dd($validation);
            return redirect()->to('/layanan/tambah')->withInput()->with('validation', $validation);
        }
            
            $file = $this->request->getFile('thumbnail');
            $thumbnail_name = $file->getRandomName();
            $this->layananModel->save([
'title' => $this->request->getVar('title'),
'deskripsi' => $this->request->getVar('deskripsi'),
'thumbnail' => $thumbnail_name,
        ]);
        $file->move('public/img/layanan', $thumbnail_name);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to('/layanan');
        
    }

    public function edit($id)
    {
        $data['d'] = $this->layananModel->where('id_layanan', $id)->get()->getRowArray();
        $data['jumlah_active'] = $this->layananModel->where('active' ,1)->countAllResults();
        $active = $this->layananModel->select('active')->get()->getRowArray();
        $act = $active['active'];

        // dd($img);
        
        if ($this->request->getVar('submit')) {
            $file = $this->request->getFile('thumbnail');
            
            if ($file == "") {
            $this->layananModel
                ->set('title', $this->request->getVar('title'))
                ->set('deskripsi', $this->request->getVar('deskripsi'))
                ->set('active', $act)
                ->where('id_layanan', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to('/layanan');
            }else{
            
            $thumbnail_name = $file->getRandomName();
            $this->layananModel
                ->set('thumbnail', $thumbnail_name)
                ->set('title', $this->request->getVar('title'))
                ->set('deskripsi', $this->request->getVar('deskripsi'))
                ->set('active', $act)
                ->where('id_layanan', $id)
                ->update();
            $file->move('public/img/layanan', $thumbnail_name);
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to('/layanan');
            }

            
        }
        return view('layanan/edit', $data);
    }

    public function hapus($id)
    {
        $this->layananModel->where('id_layanan', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/layanan');
    }
    public function change_active()
    {
        $layanan_id = $this->request->getVar('id_layanan');
        if ($this->request->getVar('changeActivated')) {
            // dd($this->request->getVar());

            $this->layananModel
                ->set('active', $this->request->getVar('changeActivated'))
                ->where('id_layanan', $layanan_id)
                ->update();
            // dd($id_periksa);
            return redirect()->to(base_url('layanan/edit' . '/' . $layanan_id));
        }
    }

    public function layanan_lainya()
    {
        $data['layanan'] = $this->layananModel->get()->getResultArray();
        return view('layanan/layanan_lainya',$data);
    }
    public function detail_layanan($id)
    {   
        $data['layanan'] = $this->layananModel->where('id_layanan', $id)->get()->getRow();
        // dd($data);
        return view('layanan/detail_layanan', $data);
    }
}