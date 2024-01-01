<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\MicroJob;
use Illuminate\Http\Request;

class MicroJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $microjobs = MicroJob::where("admin_id", auth()->guard("admin")->user()->id)->get();
        return view('panel.pages.microjob', compact("microjobs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.pages.addmicrojob');
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
        $model = new MicroJob();
        $model->fill(array_merge($request->all(), [
            "admin_id" => auth()->guard("admin")->user()->id,
            "advert_no" => rand(1000, 9000),
            "status" => 0
        ]))->save();
        return redirect()->route("panel.mikro-is.index");
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
        $microjob = MicroJob::findOrFail($id);
        return view("panel.pages.microdetail", compact("microjob"));
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
        $model = MicroJob::findOrFail($id);
        $model->fill($request->all())->save();
        return redirect()->route("panel.mikro-is.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = MicroJob::findOrFail($id);
        $model->delete();
        return redirect()->route("panel.mikro-is.index");
    }
}
