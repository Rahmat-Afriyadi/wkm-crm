<?php

namespace App\Http\Controllers;

use App\Models\StockCard;
use Illuminate\Http\Request;

class StockCardController extends Controller
{
    //

    public function index()
    {
        $stock_card = StockCard::orderBY("tgl_expired", "desc")->paginate(10);
        return view("stock-card.stock-card", compact("stock_card"));
    }

    public function create(Request $request)
    {
        return view("stock-card.create-stock-card");
    }

    public function store(Request $request)
    {

        $request->validate([
            'no_kartu' => 'required',
            'tgl_cetak' => 'required'
        ]);
        $dataKartu = findNoKartu($request->input("no_kartu"));

        StockCard::create([
            'no_kartu' => $dataKartu["no_kartu"],
            'tgl_cetak' => $request->input("tgl_cetak"),
            'status' => 0,
            'tgl_expired' => $dataKartu["tgl_expired"]
        ]);

        return redirect(route('stock_card.index'));
    }
}
