<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

    
    
}
