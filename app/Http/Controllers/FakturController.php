<?php

namespace App\Http\Controllers;

use App\Models\Faktur;
use App\Models\Kurir;
use Illuminate\Http\Request;

class FakturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trxs = Faktur::all();
        return view("table", compact("trxs"));
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
        //
        return $request->all();
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
        //
        $i = Faktur::where('no_mesin', $id)->first();
        $kurir = Kurir::all();
        return view("home", compact("kurir", "i"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'no_kartu' => 'required',
            'kurir' => 'required'
        ]);

        return redirect(route('table-barcode-bawa'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
