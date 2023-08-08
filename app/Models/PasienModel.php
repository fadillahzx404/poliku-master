<?php
namespace App\Models;
use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $allowedFields = ['nik','username','password','nama','pekerjaan', 'jenis_kelamin','telepon','alamat'];
}
