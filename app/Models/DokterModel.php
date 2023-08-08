<?php
namespace App\Models;
use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table      = 'dokter';
    protected $primaryKey = 'id_dokter';
    protected $allowedFields = ['nama','username','password','nik','tempat_lahir','tanggal_lahir','jenis_kelamin','email','telepon','alamat'
,'level','jadwal','jam_masuk'];
}
