<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;

class ModulSurveyController extends Controller
{
    public function index(){
        $aspek = DB::table('aspect')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $pertanyaan= DB::table('question')
        ->join('aspect', 'question.id_aspek', '=', 'aspect.id_aspek')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        // dd($pertanyaan);

        return view('penilaian.soal', compact('aspek', 'pertanyaan'));
    }

    public function submit(Request $request){
        $aspek= DB::table('question')
        ->join('aspect', 'question.id_aspek', '=', 'aspect.id_aspek')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $data = $request->answer;
        // dd($data);

        $nilaiSoal = [];
        $test=0;

  
            foreach ($aspek as $a => $x) {
                // dd($data[$i->dimensi][$x->kode][$x->kode_indikator]);
                $decode = json_decode($data[$x->dimensi][$x->kode][$x->kode_indikator],true);
                // dd($decode);
                $simpan_for_answer[$x->dimensi][$x->kode][$x->kode_indikator] = $decode['nilai'];
                $sum_indikator[$x->dimensi][$x->kode][$x->kode_indikator] = $decode['nilai']*$decode['bobot_soal'];
                $sum_aspek[$x->dimensi][$x->kode] = array_sum($sum_indikator[$x->dimensi][$x->kode]) *$decode['bobot_aspek'];
                $sum_dimensi[$x->dimensi] = array_sum($sum_aspek[$x->dimensi]) *$decode['bobot_dimensi'];
                $sum_total =  array_sum($sum_dimensi)/5;
            }
            // dd($simpan_for_answer);
            // dd($sum_aspek);
            // dd($sum_dimensi);
            // dd($sum_total);

            // $nilaiSoal[$v->dimensi] =0;
        // dd($test);

        DB::table('answer')->insert([
            'id' => Auth::user()->id,
            'jawaban_terpilih' => json_encode($simpan_for_answer, true),
            'filled_at' => now(),
            'total_env' => $sum_dimensi['Environment'],
            'total_gov' => $sum_dimensi['Governance'],
            'total_soc' => $sum_dimensi['Social'],
            'total_all' => $sum_total
        ]);

        return view('user.dashboard');
    }

    public function previewSoal(Request $request){
        $aspek = DB::table('aspect')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $pertanyaan= DB::table('question')
        ->join('aspect', 'question.id_aspek', '=', 'aspect.id_aspek')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $jawaban = DB::table('answer')
        ->join('users', 'answer.id', '=', 'users.id')
        ->where('answer.id', Auth::user()->id)
        ->whereYear('answer.filled_at', $request->tahun)
        ->get();
        // dd($jawaban);

        $tes = json_decode($jawaban[0]->jawaban_terpilih,true);

        // dd($tes['Environment'][1][1]);
        return view('penilaian.preview-soal', compact('aspek', 'pertanyaan', 'jawaban', 'tes'));

    }

    public function cetakHasil(Request $request){
        $aspek = DB::table('aspect')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $pertanyaan= DB::table('question')
        ->join('aspect', 'question.id_aspek', '=', 'aspect.id_aspek')
        ->join('dimention', 'aspect.id_dimensi', '=', 'dimention.id_dimensi')
        ->get();

        $jawaban = DB::table('answer')
        ->join('users', 'answer.id', '=', 'users.id')
        ->where('answer.id', Auth::user()->id)
        ->whereYear('answer.filled_at', $request->tahun)
        ->get();

        $count = DB::table('dimention')
        ->get()
        ->count();
        $dim = DB::table('dimention')
        ->get();
        // dd($count);


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
            $sum_indikator[$x->dimensi][$x->kode][$x->kode_indikator] = $tes[$x->dimensi][$x->kode][$x->kode_indikator]*$x->bobot_pertanyaan;
            // dd($sum_indikator);
            $sum_aspek[$x->dimensi][$x->kode] = array_sum($sum_indikator[$x->dimensi][$x->kode]) *$x->bobot_aspek;
            $sum_dimensi[$x->dimensi] = array_sum($sum_aspek[$x->dimensi]) *$x->bobot_dimensi;
            $sum_total =  array_sum($sum_dimensi)/5;
        }
        // dd($count_dim);



        return view('penilaian.cetak', compact('aspek', 'pertanyaan', 'jawaban', 'count_dim', 'count', 'sum_aspek', 'sum_dimensi', 'dim'));
    }
}
