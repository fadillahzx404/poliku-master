<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;
use App\Models\BookingModel;
use App\Models\DokterModel;
use App\Models\PasienModel;
use CodeIgniter\I18n\Time;

class Booking extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->bookingModel = new BookingModel();
        $this->dokterModel = new DokterModel();
        $this->pasienModel = new PasienModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        // $data['title'] = 'Data Master';
        $data['booking'] = $this->bookingModel->where('id_pasien', session('id'))
            ->join('dokter', 'booking.id_dokter=dokter.id_dokter')->get()->getResultArray();

        return view('booking/index', $data);
    }
    public function tambah_jam()
    {
        $data['booking'] = $this->bookingModel->get()->getResultArray();
        $data['dokter']  = $this->dokterModel->get()->getResultArray();

        $jadwal = $this->dokterModel->select('jadwal')->get()->getResultArray();

        

        



        
        // dd($booking);
         if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());

             $time = date('H:i',strtotime($this->request->getVar('untuk_jam')));
             

            $this->bookingModel
                ->set('untuk_tanggal', $this->request->getVar('untuk_tanggal'))
                ->set('id_pasien', session('id'))
                ->set('tanggal_booking', date('y:m:d'))
                ->set('untuk_jam', $time)
                ->insert();
                $id_book = $this->bookingModel->insertID();
                // dd($id_book);
                return redirect()->to(base_url('booking/pasien/tambah/'. $id_book));
        
            }
            return view('booking/tambah_jam', $data);
}

    public function tambah($id)
    {
        session();
        $booking = $this->bookingModel->where('id_booking', $id)->get()->getRowArray();
        $data['b'] = $this->bookingModel->where('id_booking', $id)->get()->getRowArray();
        $id_book = $booking['id_booking'];
        $tanggal = date('l',strtotime($booking['untuk_tanggal']));
        $pilih_jam = $booking['untuk_jam'];
        

        


        $dokter= $this->dokterModel->select('id_dokter,nama,jadwal')->where('jadwal',$tanggal)->get()->getResultArray();
        $j_dokter = $this->dokterModel->select('id_dokter,nama,jadwal');
        $data['dokter'] = $j_dokter->like('jadwal',$tanggal)->get()->getRowArray();
        

        $dok = $this->dokterModel->select('id_dokter,nama,jadwal,jam_masuk');

        
        $data['dj'] = $dok->like('jadwal',$tanggal)->get()->getResultArray();

        
        


        

        
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
           
            
            $this->bookingModel
                ->set('id_dokter', $this->request->getVar('id_dokter'))
                ->set('id_pasien', session('id'))
                ->set('tanggal_dan_jam_booking', date('y-m-d'))
                ->where('id_booking',$id_book)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('booking/pasien'));
        }
        return view('booking/tambah', $data);
    }

    public function edit($id)
    {
        $data['d'] = $this->bookingModel->where('id_booking', $id)->get()->getRowArray();
        $data['dokter'] = $this->dokterModel->get()->getResultArray();
        if ($this->request->getVar('submit')) {
            $this->db->table('booking')
                ->set('untuk_tanggal', $this->request->getVar('untuk_tanggal'))
                ->set('untuk_jam', $this->request->getVar('untuk_jam'))
                ->set('id_dokter', $this->request->getVar('id_dokter'))
                ->where('id_booking', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/booking'));
        }
        return view('booking/edit', $data);
    }

    public function hapus($id)
    {
        $this->bookingModel->where('id_booking', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to(base_url('/booking'));
    }

    public function admin()
    {
        // $data['title'] = 'Data Master';
        $data['booking'] = $this->bookingModel
            ->select('booking.*, dokter.nama as nama_dokter, pasien.nama as nama_pasien')
            ->join('dokter', 'booking.id_dokter=dokter.id_dokter')
            ->join('pasien', 'booking.id_pasien=pasien.id_pasien')
            ->get()->getResultArray();
        // dd($data);
        return view('booking/admin', $data);
    }

    public function admin_tambah()
    {
        $data['dokter'] = $this->dokterModel->get()->getResultArray();
        $data['pasien'] = $this->pasienModel->get()->getResultArray();
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $this->bookingModel
                ->set('untuk_tanggal', $this->request->getVar('untuk_tanggal'))
                ->set('untuk_jam', $this->request->getVar('untuk_jam'))
                ->set('id_dokter', $this->request->getVar('id_dokter'))
                ->set('id_pasien', $this->request->getVar('id_pasien'))
                ->set('jam_booking', date('H:i'))
                ->set('tanggal_booking', date('Y-m-d'))
                ->insert();
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');
            return redirect()->to(base_url('booking/admin'));
        }
        return view('booking/admin_tambah', $data);
    }

    public function admin_edit($id)
    {
        $data['d'] = $this->bookingModel
            ->select('booking.*, dokter.nama as nama_dokter, pasien.nama as nama_pasien')
            ->join('dokter', 'booking.id_dokter=dokter.id_dokter')
            ->join('pasien', 'booking.id_pasien=pasien.id_pasien')
            ->where('id_booking', $id)
            ->get()->getRowArray(); 
        // $data['d'] = $this->bookingModel->where('id_booking', $id);
        $data['dokter'] = $this->dokterModel->get()->getResultArray();
        // $data['pasien'] = $this->pasienModel->get()->getResultArray();  
        // dd($data);
        if ($this->request->getVar('submit')) {
            $this->bookingModel
                ->set('untuk_tanggal', $this->request->getVar('untuk_tanggal'))
                ->set('untuk_jam', $this->request->getVar('untuk_jam'))
                ->set('id_dokter', $this->request->getVar('id_dokter'))
                ->set('id_pasien', $this->request->getVar('id_pasien'))
                ->where('id_booking', $id)
                ->update();
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
            return redirect()->to(base_url('/booking/admin'));
        }
        return view('booking/admin_edit', $data);
    }

    public function admin_hapus($id)
    {
        $this->bookingModel->where('id_booking', $id)->delete();
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to(base_url('booking/admin'));
    }

    public function dokter()
    {
        // $data['title'] = 'Data Master';
        $data['booking'] = $this->bookingModel
            ->where('id_dokter', session('id'))
            ->select('booking.*, pasien.nama as nama_pasien')
            ->join('pasien', 'booking.id_pasien=pasien.id_pasien')
            ->get()->getResultArray();
        // dd($data);
        return view('booking/dokter', $data);
    }
}
