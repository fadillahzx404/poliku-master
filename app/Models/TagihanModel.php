<?php
namespace App\Models;
use CodeIgniter\Model;

class TagihanModel extends Model
{
    protected $table      = 'tagihan';
    protected $primaryKey = 'id_tagihan';
    protected $allowedFields = ['id_tagihan', 'id_pasien' ,'id_dokter', 'deskripsi', 'biaya_tindakan', 'biaya_obat', 'diskon', 'total_biaya', 'metode_pembayaran', 'tanggal_update', 'jam_update', 'status'];
}
