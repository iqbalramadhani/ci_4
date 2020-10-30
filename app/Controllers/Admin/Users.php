<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
  public function index()
  {
    echo 'ini controller Users methode index';
  }

  public function about($nama = '', $umur = 0)
  {
    // echo "Ini nama saya $this->nama";
    echo "Ini nama saya $nama, saya berumur $umur";
  }

  //--------------------------------------------------------------------

}
