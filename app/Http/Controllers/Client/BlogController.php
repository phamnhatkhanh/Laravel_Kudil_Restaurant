<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('client.menu.blog.blog');
    }
    public function blogBordered()
    {
        return view('client.menu.blog.bordered');
    }
    public function blogClassic()
    {
        return view('client.menu.blog.classic');
    }
    public function blogDateAndAuthorLeft()
    {
        return view('client.menu.blog.date_and_author_left');
    }
    public function blogFashion()
    {
        return view('client.menu.blog.fashion');
    }
    public function blogModern()
    {
        return view('client.menu.blog.modern');
    }
}
