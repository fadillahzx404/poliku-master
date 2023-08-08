<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class LayananModel extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';
    protected $allowedFields = ['id_layanan', 'thumbnail', 'title', 'deskripsi','active'];
}