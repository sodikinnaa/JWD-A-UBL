<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return
        view('depan/templates/v_header') 
        .view('depan/v_homepage')
        .view('depan/templates/v_footer');
    }

    function daftarWisata(){

        return 
        view('depan/templates/v_header')
        .view('depan/v_pendaftaran_wisata')
        .view('depan/templates/v_footer');
    }
}
