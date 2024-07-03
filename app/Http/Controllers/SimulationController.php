<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulationController extends Controller
{
    public function roundUp($num, $precision) {
        $precision = pow(10, $precision);
        return ceil($num * $precision) / $precision;
    }

    public function count(Request $req){
        if ($req->rate == 0.0240) { //update bunga 2.42
            $admin = 1518000;
            $bungaPerTahun = 0.29; //bunga * 12
        } elseif($req->rate == 0.0185) {
            $admin = 1818000;
            $bungaPerTahun = 0.222;
        } else {
            $admin = 1818000;
            $bungaPerTahun = 0.21;
        }

        $tenor12 = 12;
        $tenor24 = 24;
        $tenor36 = 36;
        $tenor48 = 48;

        $rateAss12 = 0.0080;
        $rateAss24 = 0.0144;
        $rateAss36 = 0.0200;
        $rateAss48 = 0.0248;

        // Tenor 12 Bulan
        $asuransi_12 = $req->otr * $rateAss12;
        $uangMukaMurni_12 = $req->dp - ($admin + $asuransi_12);
        $pokokHutang_12 = $req->otr - $uangMukaMurni_12;
        $angsuranPokok_12 = $pokokHutang_12 / $tenor12;
        $bungaPertama_12 = $pokokHutang_12 * ($bungaPerTahun / 12);
        $angsuranPokok_12 = round($angsuranPokok_12);
        $bungaPertama_12 = round($bungaPertama_12);
        $sum_12 = $angsuranPokok_12 + $bungaPertama_12;
        $angsuran_12 = $this->roundUp($sum_12, -2);
        $a12 = $angsuran_12;
        

        // Tenor 24 Bulan
        $asuransi_24 = $req->otr * $rateAss24;
        $uangMukaMurni_24 = $req->dp - ($admin + $asuransi_24);
        $pokokHutang_24 = $req->otr - $uangMukaMurni_24;
        $angsuranPokok_24 = $pokokHutang_24 / $tenor24;
        $bungaPertama_24 = $pokokHutang_24 * ($bungaPerTahun / 12);
        $angsuranPokok_24 = round($angsuranPokok_24);
        $bungaPertama_24 = round($bungaPertama_24);
        $sum_24 = $angsuranPokok_24 + $bungaPertama_24;
        $angsuran_24 = $this->roundUp($sum_24, -2);
        $a24 = $angsuran_24;

        // Tenor 36 Bulan
        $asuransi_36 = $req->otr * $rateAss36;
        $uangMukaMurni_36 = $req->dp - ($admin + $asuransi_36);
        $pokokHutang_36 = $req->otr - $uangMukaMurni_36;
        $angsuranPokok_36 = $pokokHutang_36 / $tenor36;
        $bungaPertama_36 = $pokokHutang_36 * ($bungaPerTahun / 12);
        $angsuranPokok_36 = round($angsuranPokok_36);
        $bungaPertama_36 = round($bungaPertama_36);
        $sum_36 = $angsuranPokok_36 + $bungaPertama_36;
        $angsuran_36 = $this->roundUp($sum_36, -2);
        $a36 = $angsuran_36;

        // Tenor 48 Bulan
        $asuransi_48 = $req->otr * $rateAss48;
        $uangMukaMurni_48 = $req->dp - ($admin + $asuransi_48);
        $pokokHutang_48 = $req->otr - $uangMukaMurni_48;
        $angsuranPokok_48 = $pokokHutang_48 / $tenor48;
        $bungaPertama_48 = $pokokHutang_48 * ($bungaPerTahun / 12);
        $angsuranPokok_48 = round($angsuranPokok_48);
        $bungaPertama_48 = round($bungaPertama_48);
        $sum_48 = $angsuranPokok_48 + $bungaPertama_48;
        $angsuran_48 = $this->roundUp($sum_48, -2);
        $a48 = $angsuran_48;

        $dpPercent = number_format(($req->dp / $req->otr) * 100, 0);

        return redirect()->route('simulation')->with([
            'a12' => $a12,
            'a24' => $a24,
            'a36' => $a36,
            'a48' => $a48,
            'dpPercent' => $dpPercent,
            'rate' => $req->rate
        ])
        ->withInput();
    }

    public function index(){
        $title = 'Credit Simulation';

        return view('page', compact('title'));
    }
}
