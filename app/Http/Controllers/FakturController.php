<?php

namespace App\Http\Controllers;

use App\Models\Faktur;
use App\Models\Kurir;
use App\Models\StockCard;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class FakturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_tanda_terima()
    {
        $trxs = Faktur::where("sts_kartu", 1)->get(['no_mesin', 'tgl_byr', 'nama_cs']);
        return view("faktur.barcode-bawa", compact("trxs"));
    }

    public function index_barcode_bawa()
    {
        $trxs = Faktur::whereNull("card_1")->where("sts_kartu", 1)->get(['no_mesin', 'tgl_byr', 'nama_cs']);
        return view("faktur.barcode-bawa", compact("trxs"));
    }

    public function index_pa_barcode_bawa()
    {
        $trxs = Faktur::whereNotNull("card_1")->where("sts_kartu", 2)->get(['no_mesin', 'tgl_byr', 'nama_cs', 'card_1']);
        return view("faktur.pa-barcode-bawa", compact("trxs"));
    }

    public function index_bayar()
    {
        $trxs = Faktur::whereNotNull("card_1")->where("sts_kartu", 3)->where("sts_bayar", "S")->get(['no_mesin', 'tgl_byr', 'nama_cs', 'card_1', 'tgl_byr_cs']);
        return view("faktur.bayar", compact("trxs"));
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
    public function detail_transaksi(string $id)
    {
        $faktur = Faktur::findOrFail($id);
        return $faktur;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function detail_barcode_bawa(string $id)
    {
        //
        $i = Faktur::where('no_mesin', $id)->first();
        $kurir = Kurir::all();
        return view("faktur.detail-barcode-bawa", compact("kurir", "i"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_barcode_bawa(Request $request, string $id)
    {
        $request->validate([
            'no_kartu' => 'required',
            'kurir' => 'required'
        ]);

        $dataKartu =  findNoKartu($request->input("no_kartu"));
        try {
            $kartu = StockCard::findOrFail($dataKartu["no_kartu"]);
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => 'Stock Card Tidak ditemukan']);
        }

        if ($kartu->status != 0) {
            return back()->withErrors(['error' => 'Stock Card Sudah dipakai']);
        }

        $kartu->status = 1;
        $kartu->save();
        $faktur = Faktur::findOrFail($id);
        Faktur::where("no_mesin", $id)->update([
            'card_1' => $kartu->no_kartu,
            'tgl_expired' => $kartu->tgl_expired,
            'sts_kartu' => 2,
            'kode_kurir' => $request->input('kurir'),
            'tgl_byr' => $request->input("tgl_bayar")
        ]);

        return redirect(route('faktur.index_barcode_bawa'));
    }

    public function create_bayar(Request $request)
    {
        return view("faktur.create-bayar");
    }

    public function update_bayar(Request $request)
    {

        $request->validate([
            'no_kartu' => 'required',
            'tgl_byr_cs' => 'required'
        ]);
        $dataKartu = findNoKartu($request->input("no_kartu"));
        try {
            $kartu = StockCard::findOrFail($dataKartu["no_kartu"]);
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => 'Stock Card Tidak ditemukan']);
        }

        if ($kartu->status != 1) {
            return back()->withErrors(['error' => 'Stock Card Tidak Bisa Dibayar']);
        }

        try {
            $faktur = Faktur::where("card_1", $kartu->no_kartu)->first();
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => 'Transaksi tidak ditemukan']);
        }

        $faktur->tgl_byr_cs = $request->input("tgl_byr_cs");
        $faktur->sts_bayar = 'S';
        $faktur->save();

        $kartu->status = 3;
        $kartu->save();

        return redirect(route('faktur.index_bayar'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
