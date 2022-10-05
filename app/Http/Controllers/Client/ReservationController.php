<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        // $listMenu = $this -> listMenu;
        // $listBanner = $this -> listBanner;
        // $logo = $this -> logo;
        return view('client.reservation.reservation');
        // return view('client.layout.main', compact('listMenu','listBanner', 'logo'));
    }
}
