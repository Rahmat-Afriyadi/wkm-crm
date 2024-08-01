<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $primaryKey = 'no_mesin';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = ['no_mesin'];

    public function kurir()
    {
        return $this->belongsTo(Kurir::class, "kode_kurir", "kode_kurir");
    }
}
