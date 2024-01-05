<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function bidPost(Request $request, string $advert)
    {
        $request->validate([
            "price" => "required|numeric",
            "content" => "required|string",
            "day" => "required|date",
        ]);
        $model = new Bid();
        $model->fill(array_merge($request->all(), [
            "advert_no" => $advert,
            "user_id" => auth()->guard("user")->user()->id,
            "type" => "advert"
        ]))->save();
        return redirect()->route("user.home");
    }
}
