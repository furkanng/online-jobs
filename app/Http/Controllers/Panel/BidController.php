<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bids = Bid::all();
        return view('#', compact("bids"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "price" => "required|numeric",
        ]);
        $model = new Bid();
        $model->fill($request->all())->save();
        return redirect()->back();
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
        $bid = Bid::findOrFail($id);
        return view("#", compact("bid"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "price" => "required|sometimes|numeric",
        ]);
        $model = Bid::findOrFail($id);
        $model->fill($request->all())->save();
        return redirect()->route("#");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Bid::findOrFail($id);
        $model->delete();
        return redirect()->back();
    }
}
