<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bid;
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
}
