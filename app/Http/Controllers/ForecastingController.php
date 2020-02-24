<?php

namespace App\Http\Controllers;
use App\RUT;
use App\CurahHujanHama;

use Illuminate\Http\Request;

class ForecastingController extends Controller
{
    public function panen () {
        // $dataPengaruh = CurahHujanHama::where('tahun', 2016)->first();
        // return $dataPengaruh['tahun'];
        $datas = RUT::orderBy('tahun', 'asc')->get()->groupBy('tahun')->toArray();
        $newData = [];
        $r;
        $i;
        $X = sizeof($datas);
        $a;
        $i;
        if ($X % 2 == 0) {
            $a = ($X - 1) * (-1);
            $i = 2;
        } else {
            $a = ($X - 1) / 2 * (-1);
            $i = 1;
        }
        // echo $a + $i;

        // $a = -2;
        $totalPanenKeseluruhan = 0;
        $totalTahunPanen = 0;
        $total_x_kuadrat = 0;
        $total_xy = 0;
        foreach ($datas as $dataPertahun) {
            // array_push($dataPertahun, [
            //     'sdf' => 3
            // ]);
            
            // $dataPertahun = [
            //     'data' => $dataPertahun,
            //     'total' => 0
            // ];
            // echo '<p>' . var_dump($dataPertahun) . '</p>';

            $totalPanenPerTahun = 0;
            for ($j=0; $j < sizeof($dataPertahun); $j++) {
                $totalPanenPerTahun += $dataPertahun[$j]['jumlahBeras'];
                // echo '<p>' . var_dump($dataPertahun[$i]) . '</p>';
            }
            $tahun = $dataPertahun[0]['tahun'];
            $dataPengaruh = CurahHujanHama::where('tahun', $tahun)->first();
            // var_dump($dataPengaruh);
            $x_kuadrat = $a * $a;
            $xy = $totalPanenPerTahun * $a;
            array_push($newData, [
                'data' => $dataPertahun,
                'total' => $totalPanenPerTahun,
                'tahun' => $tahun,
                'tahunPanen' => $a,
                'curahHujan' => $dataPengaruh['curahHujan'],
                'hama' => $dataPengaruh['hama'],
                'xx' => $x_kuadrat,
                'xy' => $xy
            ]);
            $totalPanenKeseluruhan += $totalPanenPerTahun;
            $totalTahunPanen += $a;
            $total_x_kuadrat += $x_kuadrat;
            $total_xy += $xy;
            $a += $i;
            // array_push($dataPertahun, [
            //     'total' => $totalPanenPerTahun
            // ]);
            // var_dump($dataPertahun);
        }
        $total = [
            'total' => $totalPanenKeseluruhan,
            'tahun' => 'Total',
            'tahunPanen' => $totalTahunPanen,
            'curahHujan' => '-',
            'hama' => '-',
            'xx' => $total_x_kuadrat,
            'xy' => $total_xy
        ];

        $rataRataPanen = $totalPanenKeseluruhan / $X;
        $xyBagixx = $total_xy / $total_x_kuadrat;
        $subPrediksi = ($a * $xyBagixx) + $rataRataPanen;

        $hamaDanHujanSekarang = CurahHujanHama::where('tahun', date('Y'))->first();
        $curahHujanSekarang = $hamaDanHujanSekarang['curahHujan'] / 100;
        $hamaSekarang = $hamaDanHujanSekarang['hama'] / 100;
        

        $prediksi = ((($subPrediksi * $curahHujanSekarang)) + (($subPrediksi * $hamaSekarang)) + $subPrediksi);

        $forecasting = [
            'rataRataPanen' => $rataRataPanen,
            'xxBagixy' => $xyBagixx,
            'subPrediksi' => $subPrediksi,
            'curahHujanSekarang' => $curahHujanSekarang,
            'hamaSekarang' => $hamaSekarang,
            'prediksi' => $prediksi
        ];

        // return ($a);
        // return ($prediksi);
        return view('admin.forecasting.panen')->with(['datas' => $newData, 'total' => $total, 'forecasting' => $forecasting]);
    }
}
