<?php
namespace App\Models;
use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table      = 'booking';
    protected $primaryKey = 'id_booking';
    protected $allowedFields = ['id_booking','id_pasien','id_dokter','tanggal_dan_jam_booking','untuk_jam','untuk_tanggal','jenis_praktik','keterangan','status'];
}
