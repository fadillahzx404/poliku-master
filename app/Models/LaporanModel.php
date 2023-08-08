<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class LaporanModel extends Model
{
    protected $table = 'periksa';
    protected $primaryKey = 'id_periksa';
    protected $allowedFields = ['invoice','id_pasien','id_dokter','tgl_periksa','anamnesa', 'note','rekomendasi','diskon','jenis_bayar','id_diagnosa','status'];
}