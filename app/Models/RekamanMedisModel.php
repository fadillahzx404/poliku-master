<?php
namespace App\Models;
use CodeIgniter\Model;

class RekamanMedisModel extends Model
{
    protected $table      = 'rekam_medis';
    protected $primaryKey = 'id_rekaman_medis';
    protected $allowedFields = ['id_rekam_medis','id_pasien','id_dokter','berat_badan','saturasi_oksigen','suhu_badan','golongan_darah','diabetes','haemopilia','tekanan_darah','sakit_jantung','riwayat_penyakit_lain','alergi_obat','alergi_makanan','keterangan'];
}
