<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\M_answer;

class UserDashboardController extends Controller
{
    public function __invoke(Request $req)
    {
        $user_id = Auth()->user()->id;
        $answer = M_answer::where('id',$user_id)->orderBy('filled_at', 'DESC')->get();
        $cek_mengisi = $answer->where('filled_at',Carbon::now()->year)->count();
        
        
        $chart_answer = M_answer::where('id',$user_id)->orderBy('filled_at', 'ASC')->get();

        $chart_tahun=[];
        $chart_total_env=[];
        $chart_total_soc=[];
        $chart_total_gov=[];
        $chart_total_all=[];
        for ($i=0; $i < $chart_answer->count(); $i++) { 
            $chart_tahun[$i] = Carbon::parse($chart_answer[$i]->filled_at)->year;
            $chart_total_env[$i] = $chart_answer[$i]->total_env; 
            $chart_total_soc[$i] = $chart_answer[$i]->total_soc; 
            $chart_total_gov[$i] = $chart_answer[$i]->total_gov; 
            $chart_total_all[$i] = $chart_answer[$i]->total_all; 
        }
        // $chart_tahun = $answer->['filled_at'];
        // dd($chart_tahun);

        
        return view('user.dashboard', compact('answer','cek_mengisi','chart_tahun','chart_total_env','chart_total_soc','chart_total_gov','chart_total_all'));
   
    }
}
