<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adverts = Advert::all();
        return view('#', compact("adverts"));
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
            "name" => "required",
            "content" => "required",
            "price" => "required",
        ]);
        $model = new Advert();
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
        $advert = Advert::findOrFail($id);
        return view("#", compact("advert"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|sometimes",
            "content" => "required|sometimes",
            "price" => "required|sometimes",
        ]);
        $model = Advert::findOrFail($id);
        $model->fill($request->all())->save();
        return redirect()->route("#");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Advert::findOrFail($id);
        $model->delete();
        return redirect()->back();
    }
}
