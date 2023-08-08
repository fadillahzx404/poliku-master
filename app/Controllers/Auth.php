<?php

namespace App\Controllers;
use App\Models\PasienModel;
use App\Models\UsersModel;
use App\Models\DokterModel;
use Config\Services;

class Auth extends BaseController
{

    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->usersModel = new UsersModel();
        $this->pasienModel = new PasienModel();
        $this->dokterModel = new DokterModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();

        
        //meload session
        $this->session = \Config\Services::session();
        
       
    }

    public function login()
    {

        return view('login');

        // echo view('admin/footer');
    }

    public function registrasi()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('registrasi', $data);

        // echo view('admin/footer');
    }

    public function simpan_registrasi()
    {
        
         $rules = [
            
        ];
        
        //cek errornya
        
        //jika ada error kembalikan ke halaman register
        if(!$this->validate([
            'nik' => [
                'rules' => 'required|min_length[16]',
                'errors' => [
                    'required' => '{field} NIK harus di isi',
                    
                    'min_length' => '{field} Nik harus 16 angka'
                ],
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Username harus di isi',
                    'is_unique' => '{field} Username sudah ada',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} Passowrd harus di isi',
                    'min_length' => '{field} Password minimal harus 8 karakter'
                ],
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Nama harus di isi',
                ],
            ],
            'email'    => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Harus Di isi',
                    'valid_email' => 'Format email salah',
                    
                ],
            ],
            'jenis_kelamin'    => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jenis Kelamin harus di pilih',
                ],
            ],
            'telepon'    => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Telepon Harus Di isi',
                    'min_length' => 'Telepon minimal 10 angka',
                ],
            ],
        ])){
            $validation = \Config\Services::validation();
            $errors = $validation->getErrors();
            return redirect()->to('register')->withInput();
        }
            $this->pasienModel->save([           
            'nik' => $this->request->getVar('nik'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
        ]);
        
        session()->setFlashdata('pesan', 'Registrasi Berhasil Silahkan Login.');
        return redirect()->to('/login');
        

    }

    public function verif()
    {
        // dd($this->request->getVar());
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $login1 = $this->usersModel->where('username', $username)->where('Password', $password)->get()->getRowArray();
        $login2 = $this->dokterModel->where('username', $username)->where('Password', $password)->get()->getRowArray();
        $login3 = $this->pasienModel->where('username', $username)->where('Password', $password)->get()->getRowArray();
        // dd($login2);
        if (!empty($login1)) {
            $log = [
                'id' => $login1['id'],
                'nama' => $login1['nama'],
                'username' => $login1['username'],
                'level' => 'Admin'
            ];
            // dd($log);
            session()->setFlashdata('pesan', 'Admin Berhasil login');
            $this->session->set($log);
            
            return redirect()->to('dashboard');
            
        } else if (!empty($login2)) {
            $log = [
                'id' => $login2['id_dokter'],
                'nama' => $login2['nama'],
                'username' => $login2['username'],
                'level' => 'dokter'
            ];
            session()->setFlashdata('pesan', 'Dokter Berhasil login');
            $this->session->set($log);
            return redirect()->to('booking/dokter');
        } else if (!empty($login3)) {
            $log = [
                'id' => $login3['id_pasien'],
                'nama' => $login3['nama'],
                'username' => $login3['username'],
                'level' => 'pasien'
            ];
            session()->setFlashdata('pesan', 'Pasien Berhasil login');
            $this->session->set($log);
            return redirect()->to('booking/pasien');
        } else {
            session()->setFlashdata('error', 'Kombinasi Username dan Password Salah');
            return redirect()->to('login')->withInput();
        }
        // $this->session->set($login);       

        // if (!empty($login)) {

        //     $this->session->set($login);
        //     return redirect()->to(base_url('/admin'));
        // } else {
        //     session()->setFlashdata('pesan', 'Kombinasi Username dan Password Salah');
        //     return redirect()->to('/')->withInput();
        // }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        // session_destroy();
        return redirect()->to(base_url());
    }
}
