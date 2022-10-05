<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\BannerPage;
use App\Models\LogoModel;
use App\Models\MenuModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function __construct()
    // {
    //     $this -> listMenu = MenuModel::where('status', 1)->get();
    //     $this -> listBanner = BannerModel::where('status',1) -> get();
    //     $this->banner_page = BannerPage::where('for_page', 'lien-he')->first();
    //     $this -> logo = LogoModel::first();
    // }
    public function index(){
        // $listBanner = $this -> listBanner;
        // $listMenu = $this -> listMenu;
        // $banner_page = $this->banner_page;
        // $logo = $this -> logo;
        return view('client.contact_us.contact_us');
        // return view('client.contact_us.contact',compact('listBanner','listMenu','banner_page','logo'));
    }
}
