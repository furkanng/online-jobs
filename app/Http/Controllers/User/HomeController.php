<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();
        return view('user.pages.home', compact("adverts"));
    }

    public function jobdetail($id)
    {
        $advert = Advert::where("id", $id)->first();

        return view('user.pages.jobdetail', compact("advert"));
    }

    public function profile()
    {
        return view('user.pages.profile');
    }

    public function microjob()
    {
        return view('user.pages.microjob');
    }

    public function donejob()
    {
        return view('user.pages.donejob');
    }

    public function activejob()
    {
        return view('user.pages.activejob');
    }

    public function bid()
    {
        return view('user.pages.bid');
    }

    public function wallet()
    {
        return view('user.pages.wallet');
    }

    public function message()
    {
        return view('user.pages.message');
    }

}
