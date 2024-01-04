<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Bid;
use App\Models\MicroJob;
use App\Models\User;
use App\Models\UserJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $adverts = Advert::where("status", "0")->get();
        return view('user.pages.home', compact("adverts"));
    }

    public function hesap($id)
    {
        $user = User::findOrFail($id);
        $user->account = 0;
        $user->save();
        return redirect()->back();
    }

    public function jobdetail($id)
    {
        $advert = Advert::where("id", $id)->first();
        $count = Bid::where("advert_no", $advert->advert_no)->count();
        return view('user.pages.jobdetail', compact(["advert", "count"]));
    }

    public function microdetail($id)
    {
        $advert = MicroJob::where("id", $id)->first();
        $count = Bid::where("advert_no", $advert->advert_no)->count();
        return view('user.pages.microdetail', compact(["advert", "count"]));
    }

    public function profile()
    {
        return view('user.pages.profile');
    }

    public function microIndex()
    {
        $adverts = MicroJob::where("status", "0")->get();
        return view('user.pages.microisler', compact("adverts"));
    }

    public function microjob()
    {
        $userJobs = UserJobs::where("user_id", \auth()->guard("user")->user()->id)->where("type", "micro")->where("status", "0")->get();

        return view('user.pages.microjob', compact("userJobs"));
    }

    public function donejob()
    {
        return view('user.pages.donejob');
    }

    public function activejob()
    {
        $userJobs = UserJobs::where("user_id", \auth()->guard("user")->user()->id)->where("type", "advert")->where("status", "0")->get();
        return view('user.pages.activejob', compact("userJobs"));
    }

    public function bid()
    {
        $userid = auth()->guard("user")->user()->id;
        $bids = Bid::where("user_id", $userid)->get();
        return view('user.pages.bid', compact("bids"));
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
