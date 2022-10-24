<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

class AdminSurveyController extends Controller
{
    public function preview(Request $request){
        $aspek = DB::table('aspect')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $dimensi = DB::table('dimention')->get();

        $pertanyaan= DB::table('question')
        ->join('aspect', 'question.id_aspek', '=', 'aspect.id_aspek')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $jawaban = DB::table('answer')
        ->join('users', 'answer.id', '=', 'users.id')
        ->where('answer.id_jawaban', $request->id)
        ->get();
        // dd($jawaban);

        $tes = json_decode($jawaban[0]->jawaban_terpilih,true);

        // dd($tes['Environment'][1][1]);
        return view('penilaian.preview-soal', compact('aspek', 'pertanyaan', 'jawaban', 'tes', 'dimensi'));
    }

    public function cetak(Request $request){
        $aspek = DB::table('aspect')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $pertanyaan= DB::table('question')
        ->join('aspect', 'question.id_aspek', '=', 'aspect.id_aspek')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $jawaban = DB::table('answer')
        ->join('users', 'answer.id', '=', 'users.id')
        ->where('answer.id_jawaban', $request->id)
        ->get();

        $count = DB::table('dimention')
        ->get()
        ->count();
        $dim = DB::table('dimention')
        ->get();
        // dd($dim);


        for ($i=1; $i <= $count ; $i++) { 
           $count_dim [] =  DB::table('aspect')
            ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
            ->where('aspect.id_dimensi', $i)
            ->count();
        }
        
        $tes = json_decode($jawaban[0]->jawaban_terpilih,true);
        foreach ($pertanyaan as $p => $x) {
            // dd($data[$i->dimensi][$x->kode][$x->kode_indikator]);
            $decode = json_decode($tes[$x->dimensi][$x->kode][$x->kode_indikator],true);
            // $simpan_for_answer[$x->dimensi][$x->kode][$x->kode_indikator] = $decode['nilai'];
            $sum_indikator[$x->dimensi][$x->kode][$x->kode_indikator] = $tes[$x->dimensi][$x->kode][$x->kode_indikator]/5*$x->bobot_pertanyaan;
            // dd($sum_indikator);
            $sum_aspek[$x->dimensi][$x->kode] = array_sum($sum_indikator[$x->dimensi][$x->kode]);
            $sum_dimensi[$x->dimensi] = array_sum($sum_aspek[$x->dimensi]) *$x->bobot_dimensi*100;
            $sum_total =  array_sum($sum_dimensi);
        }
        // dd($count_dim);


        $pdf = PDF::loadview('penilaian.cetak', compact('aspek', 'pertanyaan', 'jawaban', 'count_dim', 'count', 'sum_aspek', 'sum_dimensi', 'dim', 'sum_indikator', 'tes'));
        return $pdf->stream('Hasil-Survey-' .$jawaban[0]->name .'-' .Carbon::parse($jawaban[0]->filled_at)->year .'.pdf');
    }
}
