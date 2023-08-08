<?php

namespace App\Controllers;

use App\Models\LayananModel;

class Home extends BaseController
{
    public function __construct(){
        //membuat user model untuk konek ke database 
        $this->layananModel = new LayananModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function home()
    {
        session();
        $data['layanan'] = $this->layananModel->where('active' ,1)->get()->getResultArray();
        // dd($data);
        return view('home',$data);
    }
    public function sidebar()
    {
        session();
        $db = \Config\Database::connect();
        $data['user'] = $db->query("SELECT * FROM poliku");
        // dd($data);  
        return view('sidebar');
    }
}
