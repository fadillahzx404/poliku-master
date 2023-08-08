<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\RekamanMedisModel;
use App\Models\PasienModel;
use App\Models\PeriksaModel;
use App\Models\PeriksaTindakanModel;
use App\Models\PeriksaObatModel;
use App\Models\DiagnosaModel;
use App\Models\ObatModel;
use App\Models\TarifModel;

class Rekam_medis extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->rekamanmedisModel = new RekamanMedisModel();
        $this->pasienModel = new PasienModel();
        $this->periksaModel = new PeriksaModel();
        $this->periksa_tindakanModel = new PeriksaTindakanModel();
        $this->periksa_obatModel = new PeriksaObatModel();
        $this->diagnosaModel = new DiagnosaModel();
        $this->obatModel = new ObatModel();
        $this->tarifModel = new TarifModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();

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
        // $data['title'] = 'Data Master';
        $data['rekam_medis'] = $this->rekamanmedisModel
            ->select('id_rekam_medis, rekam_medis.id_pasien, pasien.alamat, pasien.telepon, pasien.jenis_kelamin, pasien.nama')
            ->join('pasien', 'rekam_medis.id_pasien=pasien.id_pasien')
            ->join('dokter', 'rekam_medis.id_dokter=dokter.id_dokter')
            ->get()->getResultArray();

        return view('rekam_medis/index', $data);
    }

    public function tambah()
    {
        $data['pasien'] = $this->pasienModel->get()->getResultArray();
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $this->rekamanmedisModel
                ->set('id_pasien', $this->request->getVar('id_pasien'))
                ->set('id_dokter', session('id'))
                ->set('berat_badan', $this->request->getVar('berat_badan'))
                ->set('saturasi_oksigen', $this->request->getVar('saturasi_oksigen'))
                ->set('suhu_badan', $this->request->getVar('suhu_badan'))
                ->set('golongan_darah', $this->request->getVar('golongan_darah'))
                ->set('diabetes', $this->request->getVar('diabetes'))
                ->set('haemopilia', $this->request->getVar('haemopilia'))
                ->set('tekanan_darah', $this->request->getVar('tekanan_darah'))
                ->set('sakit_jantung', $this->request->getVar('sakit_jantung'))
                ->set('riwayat_penyakit_lain', $this->request->getVar('riwayat_penyakit_lain'))
                ->set('alergi_obat', $this->request->getVar('alergi_obat'))
                ->set('alergi_makanan', $this->request->getVar('alergi_makanan'))
                ->set('keterangan', $this->request->getVar('keterangan'))
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('/rekam_medis'));
        }
        return view('rekam_medis/tambah', $data);
    }

    public function edit($id)
    {
        $data['d'] = $this->rekamanmedisModel->where('id_rekam_medis', $id)->get()->getRowArray();
        if ($this->request->getVar('submit')) {
            $this->rekamanmedisModel
                ->set('keterangan', $this->request->getVar('keterangan'))
                ->where('id_rekam_medis', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/rekam_medis'));
        }
        return view('rekam_medis/edit', $data);
    }

    public function hapus($id)
    {
        $this->rekamanmedisModel->where('id_rekam_medis', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to(base_url('rekam_medis'));
    }

    public function periksa($id)
    {
        $pasien = $this->pasienModel->where('id_pasien', $id)->get()->getRowArray();
        $medis = $this->rekamanmedisModel->where('id_pasien', $id)->get()->getRowArray();
        if ($medis > 0) {

            $data = ([
                'pasien' => $pasien,
                'medis' => $medis
            ]);
        } else {
            $data = array(
                'pasien' => $pasien,
                'medis' => array(
                    'id_rekam_medis' => '',
                    'id_pasien' => '',
                    'id_dokter' => '',
                    'berat_badan' => '',
                    'saturasi_oksigen' => '',
                    'suhu_badan' => '',
                    'golongan_darah' => '',
                    'diabetes' => '',
                    'haemopilia' => '',
                    'tekanan_darah' => '',
                    'sakit_jantung' => '',
                    'riwayat_penyakit_lain' => '',
                    'alergi_obat' => '',
                    'alergi_makanan' => '',
                    'keterangan' => ''
                )
            );
        }
        // dd($data);
        return view('rekam_medis/periksa', $data);
    }

    public function rekam_medis_save()
    {
        // dd($this->request->getVar());
        $id_pasien = $this->request->getVar('id_pasien');
        $medis = $this->rekamanmedisModel->where('id_pasien', $id_pasien)->get()->getRowArray();
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            if ($medis == 0) {
                $this->rekamanmedisModel
                    ->set('id_pasien', $this->request->getVar('id_pasien'))
                    ->set('id_dokter', session('id'))
                    ->set('berat_badan', $this->request->getVar('berat_badan'))
                    ->set('saturasi_oksigen', $this->request->getVar('saturasi_oksigen'))
                    ->set('suhu_badan', $this->request->getVar('suhu_badan'))
                    ->set('golongan_darah', $this->request->getVar('golongan_darah'))
                    ->set('diabetes', $this->request->getVar('diabetes'))
                    ->set('haemopilia', $this->request->getVar('haemopilia'))
                    ->set('tekanan_darah', $this->request->getVar('tekanan_darah'))
                    ->set('sakit_jantung', $this->request->getVar('sakit_jantung'))
                    ->set('riwayat_penyakit_lain', $this->request->getVar('riwayat_penyakit_lain'))
                    ->set('alergi_obat', $this->request->getVar('alergi_obat'))
                    ->set('alergi_makanan', $this->request->getVar('alergi_makanan'))
                    ->set('keterangan', $this->request->getVar('keterangan'))
                    ->insert();
            } else {
                $this->rekamanmedisModel
                    ->set('id_dokter', session('id'))
                    ->set('berat_badan', $this->request->getVar('berat_badan'))
                    ->set('saturasi_oksigen', $this->request->getVar('saturasi_oksigen'))
                    ->set('suhu_badan', $this->request->getVar('suhu_badan'))
                    ->set('golongan_darah', $this->request->getVar('golongan_darah'))
                    ->set('diabetes', $this->request->getVar('diabetes'))
                    ->set('haemopilia', $this->request->getVar('haemopilia'))
                    ->set('tekanan_darah', $this->request->getVar('tekanan_darah'))
                    ->set('sakit_jantung', $this->request->getVar('sakit_jantung'))
                    ->set('riwayat_penyakit_lain', $this->request->getVar('riwayat_penyakit_lain'))
                    ->set('alergi_obat', $this->request->getVar('alergi_obat'))
                    ->set('alergi_makanan', $this->request->getVar('alergi_makanan'))
                    ->set('keterangan', $this->request->getVar('keterangan'))
                    ->where('id_pasien', $this->request->getVar('id_pasien'))
                    ->update();
                session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            }
        }
        return redirect()->to(base_url('rekam_medis/data_periksa/' . $id_pasien));
    }

    public function data_periksa($id)
    {
        $periksa = $this->periksaModel->where('tgl_periksa')->where('id_pasien', $id)->get()->getRowArray();
        if ($periksa > 0) {
            return redirect()->to(base_url('/rekam_medis/tindakan/' . $periksa['id_periksa']));
        }
        // dd($periksa);
        $data['id_pasien'] = $id;
        $data['periksa'] = $this->periksaModel->where('id_pasien', $id)->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')->get()->getResultArray();
        return view('rekam_medis/data_periksa', $data);
    }

    public function tambah_periksa($id)
    {
        $data['id_pasien'] = $id;
        $data['diagnosa'] = $this->diagnosaModel->get()->getResultArray();
        if ($this->request->getVar('submit')) {
            $this->periksaModel
                ->set('anamnesa', $this->request->getVar('anamnesa'))
                ->set('id_diagnosa', $this->request->getVar('id_diagnosa'))
                ->set('id_pasien', $this->request->getVar('id_pasien'))
                ->set('id_dokter', session('id'))
                ->insert();
            $id_periksa = $this->periksaModel->insertID();
            // dd($id_periksa);
            return redirect()->to(base_url('/rekam_medis/tindakan/' . $id_periksa));
        }
        return view('rekam_medis/tambah_periksa', $data);
    }

    public function tindakan($id_periksa)
    {
        $data['periksa'] = $this->periksaModel->where('id_periksa', $id_periksa)->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')->get()->getRowArray();
        $data['id_pasien'] = $data['periksa']['id_pasien'];

        $data['periksa_tindakan'] = $this->periksa_tindakanModel->join('tarif', 'periksa_tindakan.tindakan=tarif.id_tarif')->where('id_periksa', $data['periksa']['id_periksa'])
            ->get()->getResultArray();

        $data['periksa_obat'] = $this->periksa_obatModel->join('obat', 'periksa_obat.obat=obat.id_obat')->where('id_periksa', $data['periksa']['id_periksa'])
            ->get()->getResultArray();

        $data['tindakan'] = $this->tarifModel->get()->getResultArray();
        $data['obat'] = $this->obatModel->get()->getResultArray();
        // dd($data);
        return view('rekam_medis/tindakan', $data);
    }

    public function tindakan_add()
    {
        // dd($this->request->getVar());
        $id_periksa = $this->request->getVar('id_periksa');
        if ($this->request->getVar('submit')) {
            $this->periksa_tindakanModel
                ->set('id_periksa', $this->request->getVar('id_periksa'))
                ->set('tindakan', $this->request->getVar('tindakan'))
                ->insert();
            // dd($id_periksa);
            return redirect()->to(base_url('rekam_medis/tindakan/' . $id_periksa));
        }
    }

    public function tindakan_min($periksa, $tindakan)
    {
        $this->periksa_tindakanModel
            ->where('id_periksa_tindakan', $tindakan)
            ->delete();
        // dd($id_periksa);
        return redirect()->to(base_url('rekam_medis/tindakan/' . $periksa));
    }

    public function obat_add()
    {
        // dd($this->request->getVar());
        $id_periksa = $this->request->getVar('id_periksa');
        if ($this->request->getVar('submit')) {
            $this->periksa_obatModel
                ->set('id_periksa', $this->request->getVar('id_periksa'))
                ->set('obat', $this->request->getVar('obat'))
                ->insert();
            // dd($id_periksa);
            return redirect()->to(base_url('rekam_medis/tindakan/' . $id_periksa));
        }
    }

    public function obat_min($periksa, $obat)
    {
        $this->periksa_obatModel
            ->where('id_periksa_obat', $obat)
            ->delete();
        // dd($id_periksa);
        return redirect()->to(base_url('/rekam_medis/tindakan/' . $periksa));
    }

    public function rekam_akhir($id_periksa)
    {
        $data['periksa'] = $this->periksaModel->where('id_periksa', $id_periksa)->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')->get()->getRowArray();
        $data['id_pasien'] = $data['periksa']['id_pasien'];

        $data['periksa_tindakan'] = $this->periksa_tindakanModel->join('tarif', 'periksa_tindakan.tindakan=tarif.id_tarif')->where('id_periksa', $data['periksa']['id_periksa'])
            ->get()->getResultArray();

        $periksa1 = $this->periksa_tindakanModel->join('tarif', 'periksa_tindakan.tindakan=tarif.id_tarif')->where('id_periksa', $data['periksa']['id_periksa'])
            ->get()->getResultArray();

        $data['periksa_obat'] = $this->periksa_obatModel->join('obat', 'periksa_obat.obat=obat.id_obat')->where('id_periksa', $data['periksa']['id_periksa'])
            ->get()->getResultArray();
        
        $obat1 = $this->periksa_obatModel->join('obat', 'periksa_obat.obat=obat.id_obat')->where('id_periksa', $data['periksa']['id_periksa'])
            ->get()->getResultArray();


        if ($this->request->getVar('submit')) {
            helper('text');
            $invoice = random_string('numeric', 6);
            // dd($this->request->getVar());

            $all_tindakan = 0;?>
            <?php $all_tindakan += $periksa1[0]['tarif']; ?>
            <?php $all_obat = 0;?>
            <?php if(isset($obat1[0])){
     $all_obat += $obat1[0]['harga']; 
}else{
    $all_obat = 0; 
}  ?>
            
            <?php nf($subtotal = $all_tindakan + $all_obat);

            $total = nf($total = $subtotal - (int)$this->request->getVar('diskon'));
            $total_bayar = intval(str_replace('.','',$total));
            

            $params = array(
                        'transaction_details' => array(
                        'order_id' => $invoice,
                        'gross_amount' => $total_bayar,
                        ),
                    );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $token = $snapToken;
            // dd($token);
            $metode_pembayaran = 1;
            $status = "Belum Bayar";

            $this->periksaModel
                ->set('invoice', $invoice)
                ->set('note', $this->request->getVar('note'))
                ->set('token', $token)
                ->set('status', $status)
                ->set('id_pembayaran', $metode_pembayaran)
                ->set('diskon', $this->request->getVar('diskon'))
                ->set('rekomendasi', $this->request->getVar('rekomendasi'))
                ->set('tgl_periksa', $this->request->getVar('tgl_periksa'))
                ->where('id_periksa', $id_periksa)
                ->update();

            // dd($id_periksa);
            session()->setFlashdata('pesan', 'Selamat Rekam Medis Pasien Berhasil Ditambahkan');
            return redirect()->to(base_url('rekam_medis/dokter'));
        }

        // dd($data);
        return view('rekam_medis/rekam_akhir', $data);
    }

    public function invoice($id)
    {
        $data['d'] = $this->periksaModel->where('invoice', $id)
            ->select('periksa.*, dokter.nama as dokter, pasien.nama as pasien,diagnosa.keterangan,metode_pembayaran.metode_pembayaran as m_pembayaran')
            ->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')
            ->join('pasien', 'pasien.id_pasien=periksa.id_pasien')
            ->join('dokter', 'dokter.id_dokter=periksa.id_dokter')
            ->join('metode_pembayaran', 'metode_pembayaran.id_pembayaran=periksa.id_pembayaran')
            ->get()->getRowArray();
        // dd($data);
        return view('rekam_medis/invoice', $data);
    }

    public function pasien($id)
    {
        $data['periksa'] = $this->periksaModel->where('periksa.id_pasien', $id)->join('dokter', 'dokter.id_dokter=periksa.id_dokter')->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')->get()->getResultArray();
        // dd($data);
        return view('rekam_medis/pasien', $data);
    }

    public function data_periksa_pasien($id)
    {
        // dd($periksa);
        $data['id_pasien'] = $id;
        $data['periksa'] = $this->periksaModel->where('periksa.id_pasien', $id)->join('diagnosa', 'diagnosa.id_diagnosa=periksa.id_diagnosa')->get()->getResultArray();
        $data['nama_pasien'] = $this->pasienModel->select('nama')->where('id_pasien', $id)->get()->getRowArray();
        // dd($data);
        return view('rekam_medis/data_periksa_pasien', $data);
    }
}
