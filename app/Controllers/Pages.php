<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | WPU',
      'tes' => ['ini' => 1, 'dua', 3]
    ];
    // echo view('layout/header', $data);
    return view('pages/home', $data);
    // echo view('layout/footer');
    // return view('pages/home');
  }

  public function about()
  {
    $data = [
      'title' => 'About Me | WPU'
    ];
    // echo view('layout/header', $data);
    return view('pages/about', $data);
    // echo view('layout/footer');
    // return view('pages/about');
  }

  public function contact()
  {
    $data = [
      'title' => 'Contack Us',
      'alamat' => [
        [
          'tipe' => 'rumah',
          'alamat' => 'Jl Cinunuk No. 123',
          'kota' => 'Bandung'
        ],
        [
          'tipe' => 'Kantor',
          'alamat' => 'Jl. Setia Budi',
          'kota' => 'Bandung'
        ]
      ]
    ];

    return view('pages/contact', $data);
  }

  //--------------------------------------------------------------------

}
