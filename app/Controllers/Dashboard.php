<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\TagihanModel;
use App\Models\PasienModel;

class Dashboard extends BaseController
{
    public function __construct(){
        $this->tagihanModel = new TagihanModel();
        $this->pasienModel = new PasienModel();
    }
    public function index()
    {
        if (empty(session('nama'))) {
            return redirect()->to(base_url('/'));
        } else {

        $data['sum_pasien'] = $this->pasienModel->countAll();
        
        $data['sum_selesai'] = $this->tagihanModel->where('status','selesai')->countAllResults();
        $data['sum_gagal'] = $this->tagihanModel->where('status','gagal')->countAllResults();
        
        
           $data['pasien'] = $this->tagihanModel->select('tagihan.*, dokter.nama as dokter, pasien.nama as pasien')
            ->join('pasien', 'pasien.id_pasien=tagihan.id_pasien')
            ->join('dokter', 'dokter.id_dokter=tagihan.id_dokter')
            ->get()->getResultArray();

            return view('dashboard/dashboard', $data);
        }
    }
    public function pasien()
    {
        if (empty(session('nama'))) {
            return redirect()->to(base_url('/'));
        } else {

        $data['sum_pasien'] = $this->pasienModel->countAll();
        
        $data['sum_selesai'] = $this->tagihanModel->where('status','selesai')->countAllResults();
        $data['sum_gagal'] = $this->tagihanModel->where('status','gagal')->countAllResults();
        
        
           $data['pasien'] = $this->tagihanModel->select('tagihan.*, dokter.nama as dokter, pasien.nama as pasien')
            ->join('pasien', 'pasien.id_pasien=tagihan.id_pasien')
            ->join('dokter', 'dokter.id_dokter=tagihan.id_dokter')
            ->get()->getResultArray();

            return view('dashboard/dashboard_pasien', $data);
        }
    }
    public function dokter()
    {
        if (empty(session('nama'))) {
            return redirect()->to(base_url('/'));
        } else {

        $data['sum_pasien'] = $this->pasienModel->countAll();
        
        $data['sum_selesai'] = $this->tagihanModel->where('status','selesai')->countAllResults();
        $data['sum_gagal'] = $this->tagihanModel->where('status','gagal')->countAllResults();
        
        
           $data['pasien'] = $this->tagihanModel->select('tagihan.*, dokter.nama as dokter, pasien.nama as pasien')
            ->join('pasien', 'pasien.id_pasien=tagihan.id_pasien')
            ->join('dokter', 'dokter.id_dokter=tagihan.id_dokter')
            ->get()->getResultArray();

            return view('dashboard/dashboard_dokter', $data);
        }
    }
}
