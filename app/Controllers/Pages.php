<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {                
        $data = [
            'title' => 'Home | Skripsi Adit',
        ];
        return view('Pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Skripsi Adit'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Skripsi Adit',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Taman Malaka Barat',
                    'kota' => 'Jakarta'
                ],
                [
                    'tipe' => 'Kos',
                    'alamat' => 'Jl. Sunan Muria VI',
                    'kota' => 'Malang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
