<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('panel.pages.home');
    }

    public function loginGet()
    {
        return view('panel.pages.login');
    }
    public function adverts()
    {
        return view('panel.pages.adverts');
    }
    public function addadvert()
    {
        return view('panel.pages.addadvert');
    }
    public function deleteadvert()
    {
        return view('panel.pages.deleteadvert');
    }
    public function updateadvert()
    {
        return view('panel.pages.updateadvert');
    }
    public function advertdetail()
    {
        return view('panel.pages.advertdetail');
    }
    public function proposal()
    {
        return view('panel.pages.proposal');
    }
    public function payment()
    {
        return view('panel.pages.payment');
    }
    public function cardinfo()
    {
        return view('panel.pages.cardinfo');
    }
}
