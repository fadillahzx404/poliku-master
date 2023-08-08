<?php
namespace App\Models;
use CodeIgniter\Model;

class PeriksaTindakanModel extends Model
{
    protected $table      = 'periksa_tindakan';
    protected $primaryKey = 'id_periksa_tindakan';
    protected $allowedFields = ['id_periksa_tindakan','id_periksa','tindakan'];
}
