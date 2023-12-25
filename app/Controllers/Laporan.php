<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\PeriksaModel;


class Laporan extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->periksaModel = new PeriksaModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();

        //Helper
        helper('my_helper');

        \Midtrans\Config::$serverKey = 'SB-Mid-server-eaf4J8P5my4ka7fVlA_DLU6B';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }
    public function index()
    {
        // dd($periksa);
        $data['periksa'] = $this->periksaModel->where('invoice!=""')
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien,diagnosa.keterangan, metode_pembayaran.metode_pembayaran as m_pembayaran')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getResultArray();
        // dd($data);

        return view('laporan/index', $data);
    }

    public function payment()
    {
        $data['periksa'] = $this->periksaModel->where('invoice!=""')
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien,diagnosa.keterangan, metode_pembayaran.metode_pembayaran as m_pembayaran')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getResultArray();
        // dd($data);
        return view('laporan/payment', $data);
    }

    public function pasien($id)
    {
        $data['periksa'] = $this->periksaModel->where('periksa.id_pasien', $id)->where('invoice!=""')
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien, metode_pembayaran.metode_pembayaran as m_pembayaran,diagnosa.keterangan')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getResultArray();
        // dd($data);


        return view('laporan/pasien', $data);
    }
    public function detail_invoice($id, $id_periksa)
    {

        // dd($invoice_n);

        $periksa1 = $this->periksaModel->where('periksa.id_pasien', $id)->where('periksa.id_periksa', $id_periksa)
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien,diagnosa.keterangan')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getRow();
            
        $curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/". $periksa1->invoice ."/status",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Basic U0ItTWlkLXNlcnZlci1lYWY0SjhQNW15NGthN2ZWbEFfRExVNkI6"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

$hasil = json_decode($response,true);
// dd($hasil);
$status_code = $hasil['status_code'];

curl_close($curl);

        if ($status_code == 200) {
           $status = "Sudah Bayar";
           $update = [
            'status' => $status
           ];

           $this->periksaModel->set($update)
           ->where('periksa.id_pasien', $id)
           ->where('periksa.id_periksa', $id_periksa)
           ->update();
        }


        $data['periksa'] = $this->periksaModel->where('periksa.id_pasien', $id)->where('periksa.id_periksa', $id_periksa)
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien,diagnosa.keterangan')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getRow();

        // dd($data);
        return view('laporan/detail_invoice', $data);
    }

    public function metode_pembayaran_add()
    {
        // dd($this->request->getVar());
        $id_pasien = $this->request->getVar('id_pasien');
        $id_periksa = $this->request->getVar('id_periksa');
        $invoice = $this->request->getVar('invoice');
        
        if ($this->request->getVar('inlineRadioOptions')) {
            
            $this->periksaModel
                ->set('id_pembayaran', $this->request->getVar('inlineRadioOptions'))
                ->where('invoice', $invoice)
                ->update();
            // dd($id_periksa);
            return redirect()->to(base_url('laporan/pasien'. '/' . $id_pasien . '/' . $id_periksa  . '/' . $invoice));
        }
    }

    public function metode_pembayaran_admin()
    {
        // dd($this->request->getVar());
        $id_pasien = $this->request->getVar('id_pasien');
        $id_periksa = $this->request->getVar('id_periksa');
        $invoice = $this->request->getVar('invoice');
        
        if ($this->request->getVar('UbahMetode')) {
            // dd($this->request->getVar());
            $this->periksaModel
                ->set('id_pembayaran', $this->request->getVar('UbahMetode'))
                ->where('invoice', $invoice)
                ->update();
            // dd($id_periksa);
            return redirect()->to(base_url('payment/pasien'. '/' . $id_pasien . '/' . $id_periksa  . '/' . $invoice));
        }
        
        
    }
    public function payment_pasien($id,$id_periksa)
    {
        $data['periksa'] = $this->periksaModel->where('periksa.id_pasien', $id)->where('periksa.id_periksa', $id_periksa)
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien,diagnosa.keterangan')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getRow();

        // dd($data);
        return view('laporan/detail_invoice_admin', $data);
    }
    public function check_bayar_add()
    {
        // dd($this->request->getVar());
        $id_pasien = $this->request->getVar('id_pasien');
        $id_periksa = $this->request->getVar('id_periksa');
        $invoice = $this->request->getVar('invoice');
        
        if ($this->request->getVar('checkPembayaran')) {
            // dd($this->request->getVar());
            $this->periksaModel
                ->set('status', $this->request->getVar('checkPembayaran'))
                ->where('invoice', $invoice)
                ->update();
            // dd($id_periksa);
            return redirect()->to(base_url('payment/pasien'. '/' . $id_pasien . '/' . $id_periksa  . '/' . $invoice));
        }
    }
    public function cetak_laporan($id){
        
        $data['d'] = $this->periksaModel->where('id_periksa',$id)
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien,diagnosa.keterangan,metode_pembayaran.metode_pembayaran as m_pembayaran')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getRowArray();
        // dd($data);
        return view('laporan/laporan', $data);
    }
    
}
