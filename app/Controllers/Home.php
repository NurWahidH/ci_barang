<?php

// app/Controllers/Home.php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard Toko Codekop';
        echo view('header_view', $data);
        echo view('home_view');
        echo view('footer_view');
    }
}
