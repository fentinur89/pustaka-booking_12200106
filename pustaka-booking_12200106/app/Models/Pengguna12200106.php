<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna12200106 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna12200106';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

    /**
     * method untuk cek login dari tabel pengguna
     * berdasarkan nama dan password
     * @var string $user
     * @var string pass
     */

    public function cekLogin($user, $password)
    {
        return $this->where('nama', $user)
            ->where('password', md5($password))->first();
    }

}
