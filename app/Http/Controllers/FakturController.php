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

    public function index_kembali()
    {
        $trxs = Faktur::where("sts_kartu", 4)->get(['no_mesin', 'nama_cs', 'alsn_blm_byr']);
        return view("faktur.kembali.kembali", compact("trxs"));
    }

    public function index_check()
    {
        $trxs = Faktur::whereNotNull("alasan_check_2")->get(['no_mesin', 'nama_cs', 'alasan_check_2']);
        return view("faktur.check.check", compact("trxs"));
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
    public function detail_barcode_kembali(string $id)
    {
        //
        $i = Faktur::where('no_mesin', $id)->first();
        $kurir = Kurir::all();
        return view("faktur.kembali.detail-barcode-kembali", compact("kurir", "i"));
    }

    public function detail_post_barcode_kembali(Request $request)
    {
        //
        $i = Faktur::where('card_1', $request->input("no_kartu"))->first();
        $kurir = Kurir::all();
        return view("faktur.kembali.detail-barcode-kembali", compact("kurir", "i"));
    }

    public function form_kembali()
    {
        //
        return view("faktur.kembali.form-kembali");
    }
    public function update_kartu_kembali(Request $request)
    {
        //
        $faktur = Faktur::where("no_mesin", $request->input("no_mesin"))->first();

        $kartu = StockCard::where("no_kartu", $faktur->card_1)->first();
        $kartu->status = 3;
        $kartu->save();

        $faktur->card_2 = $faktur->card_1;
        $faktur->card_1 = null;
        $faktur->sts_kartu = 4;
        $faktur->alsn_blm_byr = $request->input("alasan");
        $faktur->save();


        return redirect()->route("faktur.index_kembali");
    }

    public function detail_check(string $id)
    {
        //
        $i = Faktur::where('no_mesin', $id)->first();
        $kurir = Kurir::all();
        return view("faktur.kembali.detail-barcode-kembali", compact("kurir", "i"));
    }

    public function detail_post_barcode_check(Request $request)
    {
        //
        $i = Faktur::where('no_mesin', $request->input("no_mesin"))->where("sts_kartu", 4)->first();
        $kurir = Kurir::all();
        return view("faktur.check.detail-barcode-check", compact("kurir", "i"));
    }

    public function form_check()
    {
        //
        return view("faktur.check.form-check");
    }
    public function update_check_alasan_2(Request $request)
    {
        //
        $faktur = Faktur::where("no_mesin", $request->input("no_mesin"))->first();

        $faktur->alasan_check_2 = $request->input("check_alasan_2");
        $faktur->save();


        return redirect()->route("faktur.index_check");
    }

    public function detail_barcode_bawa(string $id)
    {
        //
        $i = Faktur::where('no_mesin', $id)->first();
        $kurir = Kurir::all();
        return view("faktur.detail-barcode-bawa", compact("kurir", "i"));
    }

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
        $faktur->sts_kartu = 3;
        $faktur->save();

        $kartu->status = 2;
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
