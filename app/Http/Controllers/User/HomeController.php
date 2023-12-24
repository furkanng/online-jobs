<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.pages.home');
    }
    public function jobdetail()
    {
        return view('user.pages.jobdetail');
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
