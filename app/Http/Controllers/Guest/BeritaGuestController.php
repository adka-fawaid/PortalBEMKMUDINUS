<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaGuestController extends Controller
{
    public function index()
    {
        return view('guest.berita.index');
    }
}
