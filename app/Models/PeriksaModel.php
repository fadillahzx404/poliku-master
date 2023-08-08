<?php
namespace App\Models;
use CodeIgniter\Model;

class PeriksaModel extends Model
{
    protected $table      = 'periksa';
    protected $primaryKey = 'id_periksa';
    protected $allowedFields = ['id_periksa','id_pembayaran','invoice','id_pasien','id_dokter','token','tgl_periksa','anamnesa','note','rekomendasi','diskon','jenis_bayar','id_diagnosa','status'];
}
