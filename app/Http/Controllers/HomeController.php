<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // charge resources/views/home.blade.php
    }

    public function projets()
    {
        return view('projets', [
            'removeFooterBg' => true
        ]);
    }

    public function apropos()
    {
    return view('apropos');
    }
}