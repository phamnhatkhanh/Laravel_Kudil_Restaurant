<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        // $listBanner = $this -> listBanner;
        // $listMenu = $this -> listMenu;
        // $banner_page = $this->banner_page;
        // $logo = $this -> logo;
        return view('client.shop.shop');
        // return view('client.contact_us.contact',compact('listBanner','listMenu','banner_page','logo'));
    }
}
