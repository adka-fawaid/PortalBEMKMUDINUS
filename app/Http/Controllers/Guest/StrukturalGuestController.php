<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturalGuestController extends Controller
{
    public function index()
    {
        return view('guest.struktural.index');
    }
}
