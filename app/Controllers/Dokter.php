<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\DokterModel;

class Dokter extends BaseController

{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->dokterModel = new DokterModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function index()
    {
        $data['title'] = 'Data Master';
        $data['dokter'] = $this->dokterModel->get()->getResultArray();

        return view('dokter/index', $data);
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Dokter'
        ];
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $this->dokterModel
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
                ->set('level', 'dokter')
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to('dokter');
        }
        echo view('dokter/tambah',$data);
    }

    public function edit($id)
    {
        $data['d'] = $this->dokterModel->where('id_dokter', $id)->get()->getRowArray();
        
        if ($this->request->getVar('submit')) {
            $this->dokterModel
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
                ->where('id_dokter', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/dokter'));
        }
        return view('dokter/edit', $data);
    }

    public function hapus($id)
    {
        $this->dokterModel->where('id_dokter', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/dokter');
    }

    public function jadwal()
    {   
        session();
        $dokter_id = session()->nama;

        $data['dokter'] = $this->dokterModel->where('nama',$dokter_id )->get()->getRowArray();
        $data['dokteran'] = $this->dokterModel->get()->getResultArray();

    

        
        $data_d = $this->dokterModel->get()->getRowArray();
        $data['jadwalan'] = $this->dokterModel->get()->getResultArray();
        

        
        $j = $data_d['jadwal'];
        $jj = explode(",",$j);
        if(isset($jj[0]) && $jj[0] == 'monday'){
            $jj[0] = 'Senin';
        }
        if ($jj[1] == 'tuesday') {
            $jj[1] = 'Selasa';
        }
        if ($jj[2] == 'wednesday') {
            $jj[2] = 'Rabu';
        }
        if (isset($jj[3]) && $jj[3] == 'thursday') {
            $jj[3] = 'Kamis';
        }
        if (isset($jj[4]) && $jj[4] == 'friday') {
            $jj[4] = 'Jumat';
        }
        if (isset($jj[5]) && $jj[5] == 'saturday') {
            $jj[5] = 'Sabtu';
        }
        if (isset($jj[6]) && $jj[6] == 'monday') {
            $jj[6] = 'Minggu';
        }
        $data['j'] = $jj;
       



        return view('jadwal/index', $data);
    }

    public function editjadwal($id)
    {
     $data['d'] = $this->dokterModel->where('id_dokter',$id)->get()->getRowArray();
     $data_d = $this->dokterModel->where('id_dokter',$id)->get()->getRowArray();
     $j = $data_d['jadwal'];


     $dokter_nama = session()->nama;
     
     $data['dokter'] = $this->dokterModel->where('nama', $dokter_nama)->get()->getRowArray();

     $data['j'] = explode(",",$j);
     

        
     if ($_POST) {
        $checkbox = $_POST['check_list'];
        $hari = implode(',', $checkbox);

        $this->dokterModel
        ->set('jadwal', $hari)
        ->where('id_dokter',$id)
        ->update();
        
        return redirect()->to("jadwal/jam/$id");
     }
     return view('jadwal/edit',$data);   
    }

    public function pilihjam($id)
    {    
     $data['d'] = $this->dokterModel->where('id_dokter',$id)->get()->getRowArray();
     $data_d = $this->dokterModel->where('id_dokter',$id)->get()->getRowArray();
     $jam = $data_d['jadwal'];

     $dokter_nama = session()->nama;
     
     $data['dokter'] = $this->dokterModel->where('nama', $dokter_nama)->get()->getRowArray();

     $data['j'] = explode(",",$jam);

     $data_d = $this->dokterModel->where('nama', $dokter_nama)->get()->getRowArray();
        $j = $data_d['jadwal'];
        $jj = explode(",",$j);
        if(in_array('monday',$jj)){
            str_replace("monday","Senin",$jj);
        }
        if (in_array('tuesday',$jj)) {
            str_replace("tuesday","Selasa",$jj);
        }
        if (in_array('wednesday',$jj)) {
            str_replace("wednesday","Rabu",$jj);
        }
        if (in_array('thursday',$jj)) {
            str_replace("thursday","Kamis",$jj);
        }
        if (in_array('friday',$jj)) {
            str_replace("friday","Jumat",$jj);
        }
        if (in_array('saturday',$jj)) {
            str_replace("saturday","Sabtu",$jj);
        }
        if (in_array('monday',$jj)) {
            str_replace("monday","Minggu",$jj);
        }
        $data['j'] = $jj;

     if ($_POST) {
        $check_jam = $_POST['pilih_jam'];
        $jam = implode(',', $check_jam);

        $this->dokterModel
        ->set('jam_masuk', $jam)
        ->where('id_dokter',$id)
        ->update(); 

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/jadwal/dokter');
    }
    return view('jadwal/jam',$data);
        

    }
}
