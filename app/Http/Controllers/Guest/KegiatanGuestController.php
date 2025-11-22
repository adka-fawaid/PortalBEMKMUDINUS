<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanGuestController extends Controller
{
    public function index()
    {
        return view('guest.kegiatan.index');
    }
}
