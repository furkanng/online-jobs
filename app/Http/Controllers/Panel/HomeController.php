<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Advert;
use App\Models\Bid;
use App\Models\MicroJob;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();
        $advertCount = $adverts->count();
        $proposal = Bid::all();
        $proposalCount = $proposal->count();
        return view('panel.pages.home',compact('advertCount',"proposalCount"));
    }

    public function loginGet()
    {
        return view('panel.pages.login');
    }

    public function paraYukle(Request $request)
    {
        $model = Admin::findOrFail(auth()->guard("admin")->user()->id);
        $model->account = $request->get("price") + $model->account;
        $model->save();

        return redirect()->route("panel.cardinfo");
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
        $advertNo = Advert::where("admin_id", auth()->guard("admin")->user()->id)->pluck("advert_no");
        $bids = Bid::where("type", "advert")->where("status", "0")->whereIn("advert_no", $advertNo)->get();
        return view('panel.pages.proposal', compact("bids",));

    }

    public function payment()
    {
        return view('panel.pages.payment');
    }

    public function cardinfo()
    {
        return view('panel.pages.cardinfo');
    }

    public function txhistory()
    {
        return view('panel.pages.txhistory');
    }

    public function microjob()
    {
        return view('panel.pages.microjob');
    }

    public function addmicrojob()
    {
        return view('panel.pages.addmicrojob');
    }

    public function deletemicrojob()
    {
        return view('panel.pages.deletemicrojob');
    }

    public function updatemicrojob()
    {
        return view('panel.pages.updatemicrojob');
    }

    public function microproposal()
    {
        $advertNo = MicroJob::where("admin_id", auth()->guard("admin")->user()->id)->pluck("advert_no");
        $bids = Bid::where("type", "micro")->where("status", "0")->whereIn("advert_no", $advertNo)->get();
        return view('panel.pages.microproposal', compact("bids"));
    }
}
