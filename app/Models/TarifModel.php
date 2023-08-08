<?php
namespace App\Models;
use CodeIgniter\Model;

class TarifModel extends Model
{
    protected $table      = 'tarif';
    protected $primaryKey = 'id_tarif';
    protected $allowedFields = ['id_tarif','upf','nama_tindakan','perawatan','tarif'];
}
