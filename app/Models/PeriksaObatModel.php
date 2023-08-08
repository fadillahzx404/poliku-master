<?php
namespace App\Models;
use CodeIgniter\Model;

class PeriksaObatModel extends Model
{
    protected $table      = 'periksa_obat';
    protected $primaryKey = 'id_periksa_obat';
    protected $allowedFields = ['id_periksa_obat','id_periksa','obat'];
}
