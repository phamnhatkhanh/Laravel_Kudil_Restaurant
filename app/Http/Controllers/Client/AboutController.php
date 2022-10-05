<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    // public function __construct()
    // {
    //     $this->listMenu = MenuModel::where('status', 1)->get();
    //     $this->listBanner = BannerModel::where('status', 1)->get();
    //     $this->banner_page = BannerPage::where('for_page', 'gioi-thieu')->first();
    //     $this -> logo = LogoModel::first();
    // }

    public function index()
    {
        // $listMenu = $this->listMenu;
        // $banner_page = $this->banner_page;
        // $logo = $this -> logo;
        // return view('client.about_us.about', compact('listMenu', 'banner_page','logo'));
        return view('client.about_us.about_us');
    }
}
