<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Bid;
use App\Models\MicroJob;
use App\Models\User;
use App\Models\UserJobs;
use Illuminate\Http\Request;

class MicroController extends Controller
{
    public function microPost(Request $request, string $advert)
    {
        $request->validate([
            "price" => "required",
            "content" => "required",
            "day" => "required",
        ]);
        $model = new Bid();
        $model->fill(array_merge($request->all(), [
            "advert_no" => $advert,
            "user_id" => auth()->guard("user")->user()->id,
            "type" => "micro"
        ]))->save();
        return redirect()->route("user.microIndex");
    }

    public function teslim(string $id)
    {
        $userjob = UserJobs::findOrFail($id);
        $userjob->status = 1;
        $userjob->save();

        $admin = Admin::findOrFail($userjob->admin_id);
        $admin->account = ($admin->account - $userjob->price);
        $admin->save();

        $user = User::findOrFail($userjob->user_id);
        $user->account = ($userjob->price + $user->account);
        $user->save();

        $micro = MicroJob::where("advert_no", $userjob->advert_no)->first();
        $micro->teslim = 1;
        $micro->save();

        return redirect()->back();
    }
}
