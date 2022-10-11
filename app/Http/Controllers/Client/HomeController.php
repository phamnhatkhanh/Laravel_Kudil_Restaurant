<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use App\Models\Blog;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this -> listMenu = MenuModel::where('status', 1)->get();
        // $this -> listBanner = BannerModel::where('status',1) -> orderByDesc('id')-> get();
        // $this -> logo = LogoModel::first();
    }

    public function index()
    {
        $page = Page::find(1);
        $blog = Blog::all();
        // $listMenu = $this -> listMenu;
        // $listBanner = $this -> listBanner;
        // $logo = $this -> logo;
        return view('client.layout.main')->with(['sections' => $page->sections,'blog'=>$blog]);
        // return view('client.layout.main', compact('listMenu','listBanner', 'logo'));
    }

}
