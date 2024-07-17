<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockCard extends Model
{
    use HasFactory;

    protected $table = "stock_card";
    protected $primaryKey = 'no_kartu';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
}
