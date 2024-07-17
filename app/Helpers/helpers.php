<?php

use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('findNoKartu')) {
    function findNoKartu($no_kartu)
    {
        $sept = str_split($no_kartu, 4);
        $tgl_expired = substr($sept[4], 0, 2) . "-" . substr($sept[4], 2, 2) . "-01";
        return ["no_kartu" => implode(" ", array_slice($sept, 0, 4)), "tgl_expired" => $tgl_expired];
    }
}
