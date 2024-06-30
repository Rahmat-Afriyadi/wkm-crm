<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    // protected $primaryKey = 'no_mesin';
    public $timestamps = false;
    protected $guarded = ['no_mesin'];
}
