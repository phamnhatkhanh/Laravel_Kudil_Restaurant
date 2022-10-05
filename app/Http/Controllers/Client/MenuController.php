<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\BannerPage;
use App\Models\LogoModel;
use App\Models\MenuModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // public function __construct()
    // {
    //     $this->listMenu = MenuModel::where('status', 1)->get();
    //     $this->listBanner = BannerModel::where('status', 1)->get();
    //     $this->banner_page = BannerPage::where('for_page', 'menu')->first();
    //     $this->logo = LogoModel::first();
    // }

    public function index()
    {
        return view('client.menu.menu');
    }
    // public function getProduct_Menu()
    // {
    //     $listBanner = $this->listBanner;
    //     $listMenu = $this->listMenu;
    //     $banner_page = $this->banner_page;
    //     $logo = $this->logo;
    //     $products = ProductModel::selectRaw('product.id as id, product.slug as product_slug,product.name as name,product.price as price, product.image as image, menu.name as menu_name, menu.id as menu_id,menu.slug as menu_slug')
    //         ->join('menu', 'product.menu_id', 'menu.id')->where('product.status', 1)->paginate(9);
    //     return view('client.menu.menu', compact('listBanner', 'listMenu', 'banner_page', 'logo', 'products'));
    // }

    // public function getProductFromMenu($slug)
    // {
    //     $listBanner = $this->listBanner;
    //     $listMenu = $this->listMenu;
    //     $banner_page = $this->banner_page;
    //     $logo = $this->logo;
    //     $products = ProductModel::
    //     with('sub_image')
    //         ->selectRaw('product.id as id, description, product.slug as product_slug,product.name as name,product.price as price, product.image as image, menu.name as menu_name, menu.id as menu_id,menu.slug as menu_slug')
    //         ->join('menu', 'product.menu_id', 'menu.id')
    //         ->where('menu.slug', $slug)
    //         ->where('product.status', 1)
    //         ->paginate(9);

    //     return view('client.menu.menu',
    //         compact('listBanner', 'listMenu', 'banner_page', 'logo', 'products'));
    // }

    // public function getProduct_Detail($slug)
    // {
    //     $listBanner = $this->listBanner;
    //     $listMenu = $this->listMenu;
    //     $banner_page = $this->banner_page;
    //     $logo = $this->logo;
    //     $products = ProductModel::
    //     with('sub_image')
    //         ->selectRaw('product.id as id, description, product.slug as product_slug,product.name as name,product.price as price, product.image as image, menu.name as menu_name, menu.id as menu_id,menu.slug as menu_slug')
    //         ->join('menu', 'product.menu_id', 'menu.id')
    //         ->where('product.slug', $slug)
    //         ->where('product.status', 1)
    //         ->get();
    //     $_product = ProductModel::where('slug',$slug) -> first();
    //     $product_same = ProductModel::
    //     with('sub_image')
    //         ->selectRaw('product.id as id, description, product.slug as product_slug,product.name as name,product.price as price, product.image as image, menu.name as menu_name, menu.id as menu_id,menu.slug as menu_slug')
    //         ->join('menu', 'product.menu_id', 'menu.id')
    //         ->where('product.menu_id', $_product -> menu_id)
    //         ->where('product.slug','!=', $slug)
    //         ->where('product.status', 1)
    //         ->paginate(3);
    //     return view('client.detail_product.detail',
    //         compact('listBanner', 'listMenu', 'banner_page', 'logo', 'products','product_same'));

    // }
}
