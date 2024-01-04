<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Advert;
use App\Models\Bid;
use App\Models\MicroJob;
use App\Models\User;
use App\Models\UserJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adverts = Advert::where("admin_id", auth()->guard("admin")->user()->id)->get();
        return view('panel.pages.adverts', compact("adverts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.pages.addadvert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "subject" => "required",
            "content" => "required",
            "price" => "required",
        ]);
        $model = new Advert();
        $model->fill(array_merge($request->all(), [
            "admin_id" => auth()->guard("admin")->user()->id,
            "advert_no" => rand(1000, 9000),
            "status" => 0
        ]))->save();
        return redirect()->route("panel.ilanlar.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advert = Advert::findOrFail($id);
        return view("panel.pages.advertdetail", compact("advert"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "subject" => "required|sometimes",
            "content" => "required|sometimes",
            "price" => "required|sometimes",
        ]);
        $model = Advert::findOrFail($id);
        $model->fill($request->all())->save();
        return redirect()->route("panel.ilanlar.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Advert::findOrFail($id);
        $model->delete();
        return redirect()->route("panel.ilanlar.index");
    }

    public function advertjobOnay(string $id)
    {
        $bid = Bid::findOrFail($id);
        $bid->status = 1;
        $bid->save();

        $microjob = Advert::where("advert_no", $bid->advert_no)->first();
        $microjob->status = 1;
        $microjob->save();

        $userJob = new UserJobs();

        $userJob->user_id = $bid->user_id;
        $userJob->admin_id = auth()->guard("admin")->user()->id;
        $userJob->advert_no = $bid->advert_no;
        $userJob->content = $bid->content;
        $userJob->status = 0;
        $userJob->type = "advert";
        $userJob->dead_line = $bid->day;
        $userJob->price = $bid->price;
        $userJob->save();


        return redirect()->back();
    }

    public function teslim(Request $request, string $id)
    {
        $request->validate([
            "image" => "required",
        ]);

        $filename = "image-" . rand(1, 300) . "." . $request->file('image')->getClientOriginalExtension();
        Storage::disk('public')->put('image/' . $filename, file_get_contents($request->file('image')));

        $userjob = UserJobs::findOrFail($id);
        $userjob->status = 1;
        $userjob->save();

        $micro = Advert::where("advert_no", $userjob->advert_no)->first();
        $micro->teslim = 1;
        $micro->image = $filename;
        $micro->save();

        return redirect()->back();
    }

    public function odemeyap(string $id)
    {
        $advert = Advert::findOrFail($id);

        $userJob = UserJobs::where("advert_no", $advert->advert_no)->first();

        $user = User::findOrFail($userJob->user_id);
        $user->account = ($user->account + $userJob->price);
        $user->save();


        $admin = Admin::findOrFail($userJob->admin_id);
        $admin->account = ($admin->account - $userJob->price);
        $admin->save();

        return redirect()->back();
    }
}
