<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Simulation extends Component
{
    public $otr;
    public $dp;
    public $rate;
    public $model;
    public $a12;
    public $a24;
    public $a36;
    public $a48;

    public function roundUp($num, $precision) {
        $precision = pow(10, $precision);
        return ceil($num * $precision) / $precision;
    }
    
    public function count() {
        $year = Carbon::now()->format('Y');
        $price = DB::table('units')
        ->where([
            ['year_mc',$year],
            ['model_name', $this->model]
        ])
        ->groupBy('model_name')
        ->pluck('price');
        $this->otr = $price[0];
        
        if ($this->rate == 0.0240) {
            $admin = 1518000;
            $bungaPerTahun = 0.288;
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
        $asuransi_12 = $this->otr * $rateAss12;
        $uangMukaMurni_12 = $this->dp - ($admin + $asuransi_12);
        $pokokHutang_12 = $this->otr - $uangMukaMurni_12;
        $angsuranPokok_12 = $pokokHutang_12 / $tenor12;
        $bungaPertama_12 = $pokokHutang_12 * ($bungaPerTahun / 12);
        $angsuranPokok_12 = round($angsuranPokok_12);
        $bungaPertama_12 = round($bungaPertama_12);
        $sum_12 = $angsuranPokok_12 + $bungaPertama_12;
        $angsuran_12 = $this->roundUp($sum_12, -2);
        $this->a12 = $angsuran_12;
        

        // Tenor 24 Bulan
        $asuransi_24 = $this->otr * $rateAss24;
        $uangMukaMurni_24 = $this->dp - ($admin + $asuransi_24);
        $pokokHutang_24 = $this->otr - $uangMukaMurni_24;
        $angsuranPokok_24 = $pokokHutang_24 / $tenor24;
        $bungaPertama_24 = $pokokHutang_24 * ($bungaPerTahun / 12);
        $angsuranPokok_24 = round($angsuranPokok_24);
        $bungaPertama_24 = round($bungaPertama_24);
        $sum_24 = $angsuranPokok_24 + $bungaPertama_24;
        $angsuran_24 = $this->roundUp($sum_24, -2);
        $this->a24 = $angsuran_24;

        // Tenor 36 Bulan
        $asuransi_36 = $this->otr * $rateAss36;
        $uangMukaMurni_36 = $this->dp - ($admin + $asuransi_36);
        $pokokHutang_36 = $this->otr - $uangMukaMurni_36;
        $angsuranPokok_36 = $pokokHutang_36 / $tenor36;
        $bungaPertama_36 = $pokokHutang_36 * ($bungaPerTahun / 12);
        $angsuranPokok_36 = round($angsuranPokok_36);
        $bungaPertama_36 = round($bungaPertama_36);
        $sum_36 = $angsuranPokok_36 + $bungaPertama_36;
        $angsuran_36 = $this->roundUp($sum_36, -2);
        $this->a36 = $angsuran_36;

        // Tenor 48 Bulan
        $asuransi_48 = $this->otr * $rateAss48;
        $uangMukaMurni_48 = $this->dp - ($admin + $asuransi_48);
        $pokokHutang_48 = $this->otr - $uangMukaMurni_48;
        $angsuranPokok_48 = $pokokHutang_48 / $tenor48;
        $bungaPertama_48 = $pokokHutang_48 * ($bungaPerTahun / 12);
        $angsuranPokok_48 = round($angsuranPokok_48);
        $bungaPertama_48 = round($bungaPertama_48);
        $sum_48 = $angsuranPokok_48 + $bungaPertama_48;
        $angsuran_48 = $this->roundUp($sum_48, -2);
        $this->a48 = $angsuran_48;
    }

    public function render()
    {
        $a12 = $this->a12;
        $a24 = $this->a24;
        $a36 = $this->a36;
        $a48 = $this->a48;
        

        return view('livewire.simulation', compact('a12','a24','a36','a48'))->title('Credit Simulation');
    }
}
