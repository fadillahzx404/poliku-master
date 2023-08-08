<?php
namespace App\Models;
use CodeIgniter\Model;

class DiagnosaModel extends Model
{
    protected $table      = 'diagnosa';
    protected $primaryKey = 'id_diagnosa';
    protected $allowedFields = ['keterangan','standar'];
}
