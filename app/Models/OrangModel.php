<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
  protected $table = 'orang';
  protected $useTimestamps  = true;
  protected $allowedFields = ['nama', 'alamat'];

  public function search($keword)
  {
    return $this->table('orang')->like('nama', $keword)->orLike('alamat', $keword);
  }
}
