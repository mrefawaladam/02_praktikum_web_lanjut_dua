<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Muhammad refa Walada Mushtofa : 2041720062';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id '.$id;
    }
}
