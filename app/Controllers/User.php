<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;

class User extends BaseController
{
    public function index()
    {
        $new_tiket = $this->db->table('ticket')->where('reported', session('username'))->where('status', 1)->get()->getResultArray();
        $data['new'] = count($new_tiket);
        $my_tiket = $this->db->table('ticket')->where('reported', session('username'))->get()->getResultArray();
        $data['my'] = count($my_tiket);
        $rej_tiket = $this->db->table('ticket')->where('reported', session('username'))->where('status', 0)->get()->getResultArray();
        $data['rej'] = count($rej_tiket);
        $pro_tiket = $this->db->table('ticket')->where('reported', session('username'))->where('status', 4)->get()->getResultArray();
        $data['pro'] = count($pro_tiket);
        $pen_tiket = $this->db->table('ticket')->where('reported', session('username'))->where('status', 5)->get()->getResultArray();
        $data['pen'] = count($pen_tiket);
        $don_tiket = $this->db->table('ticket')->where('reported', session('username'))->where('status', 6)->get()->getResultArray();
        $data['don'] = count($don_tiket);

        $info = $this->db->table('informasi')->join('pegawai', 'pegawai.nik=informasi.id_user')->orderBy('tanggal')->get()->getResultArray();
        $data['info'] = $info;
        $data['jmlinfo'] = count($info);
        $data['my_tiket'] = $this->db->table('ticket')
            ->join('pegawai', 'pegawai.nik=ticket.reported')
            ->join('kategori_sub', 'kategori_sub.id_sub_kategori=ticket.id_sub_kategori')
            ->where('reported', session('username'))->get()->getResultArray();
        // dd($data);
        return view('user/dashboard', $data);
    }

    public function tiket()
    {
        $data['my_tiket'] = $this->db->table('ticket')
            // ->select('ticket.*,kategori.nama_kategori, kategori_sub.nama_sub_kategori,lokasi.lokasi')
            // ->join('pegawai', 'pegawai.nik=ticket.reported')
            ->join('kategori_sub', 'kategori_sub.id_sub_kategori=ticket.id_sub_kategori')
            ->join('kategori', 'kategori.id_kategori=kategori_sub.id_kategori')
            ->join('prioritas', 'prioritas.id_prioritas=ticket.id_prioritas', 'left')
            ->join('lokasi', 'lokasi.id_lokasi=ticket.id_lokasi', 'left')
            ->join('pegawai t', 't.nik=ticket.teknisi', 'left')
            // ->join('kategori_sub', 'kategori_sub.id_sub_kategori=ticket.id_sub_kategori', 'left')
            ->where('reported', session('username'))
            ->orderBy('tanggal')->get()->getResultArray();
        // dd($data);
        return view('user/tiket', $data);
    }

    function pilih_kat()
    {
        if ($this->request->getVar('kat_id')) {

            $subdkat = $this->db->table('kategori_sub')->where('id_kategori', $this->request->getVar('kat_id'))->orderBy('nama_sub_kategori')->get()->getResultArray();
            echo json_encode($subdkat);
        }
    }

    public function buat_tiket()
    {
        if ($this->request->getVar('submit')) {
            // dd($this->request->getVar());
            $file = $this->request->getFile('media');
            $tipe = $file->getClientExtension();
            $size = $file->getSizeByUnit('mb');
            $namafile = $file->getRandomName();
            $cek_tipe = ext($tipe);
            helper('text');
            // dd($tipe);
            if (($cek_tipe == 'tidak sesuai') or ($size > 25)) {
                session()->setFlashdata('gagal', 'Something went wrong! file is more than 25MB or not supported format');
                return redirect()->to(base_url('/user/buat_tiket'))->withInput();
            } else {
                $file->move('uploads/', $namafile);
                $tiket = random_string('alnum', 9);
                $tgl = date("Y-m-d  H:i:s");
                $this->db->table('ticket')
                    ->set('id_ticket', $tiket)
                    ->set('tanggal', $tgl)
                    ->set('last_update', $tgl)
                    ->set('reported', session('username'))
                    ->set('id_sub_kategori', $this->request->getVar('sub_kat'))
                    ->set('problem_summary', ucfirst($this->request->getVar('subject')))
                    ->set('problem_detail', ucfirst($this->request->getVar('des')))
                    ->set('status', 1)
                    ->set('progress', 0)
                    ->set('filefoto', $namafile)
                    ->set('id_lokasi', $this->request->getVar('lok'))
                    ->insert();

                $subkat   = $this->request->getVar('sub_kat');
                $kategori = $this->db->table('kategori_sub')
                    ->join('kategori', 'kategori.id_kategori=kategori_sub.id_kategori')
                    ->where('id_sub_kategori', $subkat)->get()->getRowArray();
                // dd(session('username'));

                $this->db->table('tracking')
                    ->set('id_ticket', $tiket)
                    ->set('tanggal', $tgl)
                    ->set('status', "Ticket Submited. Category: " . $kategori['nama_kategori'] . "(" .  $kategori['nama_sub_kategori'] . ")")
                    ->set('deskripsi', ucfirst($this->request->getVar('des')))
                    ->set('id_user', session('username'))
                    ->insert();

                session()->setFlashdata('pesan', 'Your Ticket Success Sending');
                return redirect()->to(base_url('/user/tiket'));
            }
        }
        $data['kategori'] = $this->db->table('kategori')->get()->getResultArray();
        $data['lokasi'] = $this->db->table('lokasi')->get()->getResultArray();
        // dd($data);
        return view('user/buat_tiket', $data);
    }

    public function detail_tiket($id)
    {
        $data['detail'] = $this->db->table('ticket a')
            ->select('a.*, b.nama_sub_kategori, c.id_kategori, c.nama_kategori, d.nama, d.email, f.nama as nama_teknisi, g.lokasi, h.nama_bagian_dept, i.nama_dept, j.nama_prioritas, j.warna, j.waktu_respon, k.nama_jabatan')
            ->join('kategori_sub b', 'b.id_sub_kategori=a.id_sub_kategori', 'left')
            ->join('kategori c', 'c.id_kategori=b.id_kategori', 'left')
            ->join('pegawai d', 'd.nik=a.reported', 'left')
            ->join('user e', 'e.username=a.teknisi', 'left')
            ->join('pegawai f', 'f.nik=a.teknisi', 'left')
            ->join('lokasi g', 'g.id_lokasi=a.id_lokasi', 'left')
            ->join('departemen_bagian h', 'h.id_bagian_dept=d.id_bagian_dept', 'left')
            ->join('departemen i', 'i.id_dept=h.id_dept', 'left')
            ->join('prioritas j', 'j.id_prioritas=a.id_prioritas', 'left')
            ->join('jabatan k', 'k.id_jabatan=d.id_jabatan', 'left')
            // ->join('kategori_sub', 'kategori_sub.id_sub_kategori=a.id_sub_kategori', 'left')
            ->where('a.id_ticket', $id)
            ->get()->getRowArray();

        $data['tracking'] = $this->db->table('tracking a')
            ->select('a.*,b.nama')
            ->join('pegawai b', 'b.nik=a.id_user', 'left')
            ->where('id_ticket', $id)
            ->orderBy('tanggal', 'desc')->get()->getResultArray();
        // dd($data);
        return view('user/detail_tiket', $data);
    }

    public function profil()
    {
        $data['d'] = $this->db->table('pegawai')
            ->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan')
            ->join('departemen_bagian', 'departemen_bagian.id_bagian_dept=pegawai.id_bagian_dept')
            ->join('departemen', 'departemen.id_dept=departemen_bagian.id_dept')
            ->join('user', 'user.username=pegawai.nik')
            ->where('nik', session('username'))->get()->getRowArray();
        // dd($data);
        return view('user/profil', $data);
    }

    public function password()
    {
        if ($this->request->getVar('submit')) {
            $user = $this->db->table('user')->where('id_user', session('id_user'))->get()->getRowArray();
            $lama = md5($this->request->getVar('pass_lama'));
            $new = md5($this->request->getVar('pass_new'));
            $conf = md5($this->request->getVar('pass_conf'));
            // dd($user['password']);
            if ($user['password'] != $lama) {
                session()->setFlashdata('gagal', 'Password lama salah!');
                return redirect()->to(base_url('/user/password'));
            } else {
                if ($new == $conf) {
                    $this->db->table('user')
                        ->set('password', $new)
                        ->where('id_user', session('id_user'))
                        ->update();
                    session()->setFlashdata('berhasil', 'Password Success Diperbarui');
                    return redirect()->to(base_url('/user/password'));
                } else {
                    session()->setFlashdata('gagal', 'New Password not Match With Confirm Password');
                    return redirect()->to(base_url('/user/password'));
                }
            }
            dd($this->request->getVar());
        }
        return view('user/password');
    }
}
