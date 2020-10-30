<?php

namespace App\Controllers;

class Coba extends BaseController
{
  public function index()
  {
    echo 'ini controller coba methode index';
  }

  public function about($nama = '', $umur = 0)
  {
    // echo "Ini nama saya $this->nama";
    echo "Ini nama saya $nama, saya berumur $umur";
  }

  //--------------------------------------------------------------------

}
