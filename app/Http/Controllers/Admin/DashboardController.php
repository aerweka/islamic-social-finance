<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\M_answer;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $getchart_answer = M_answer::with(['users'])->orderBy('filled_at', 'ASC')->get();

        // dd($getchart_answer);

        // chart rata rata survey
        $getchart_tahun = M_answer::selectRaw('year(filled_at) year,avg(total_env) total_env,avg(total_soc) total_soc,avg(total_gov) total_gov,avg(total_all) total_all')
        ->groupBy('year')
        ->orderBy('year', 'asc')
        ->get();

        // dd($getchart_tahun);
        $chart_tahun=[];
        $chart_total_env=[];
        $chart_total_soc=[];
        $chart_total_gov=[];
        $chart_total_all=[];
        
        for ($x=0; $x <$getchart_tahun->count(); $x++) { 
            $chart_tahun[$x] = $getchart_tahun[$x]->year;
            $chart_total_env[$x] = $getchart_tahun[$x]->total_env; 
            $chart_total_soc[$x] = $getchart_tahun[$x]->total_soc; 
            $chart_total_gov[$x] = $getchart_tahun[$x]->total_gov; 
            $chart_total_all[$x] = $getchart_tahun[$x]->total_all; 
        }
        // dd($chart_total_env);
        
        //getchart_user
        $getchart_user = User::selectRaw("count(IF(tingkatan_laznas = 'pusat',1,NULL)) pusat,count(IF(tingkatan_laznas = 'mikro',1,NULL)) mikro,count(IF(tingkatan_laznas = 'kota_kabupaten',1,NULL)) kota_kabupaten,count(IF(tingkatan_laznas = 'provinsi',1,NULL)) provinsi")
        ->get();
        
        // dd($getchart_user);
        

        return auth()->user()->is_admin ? view('admin.dashboard',compact('getchart_user','getchart_answer','chart_tahun','chart_total_env','chart_total_soc','chart_total_gov','chart_total_all')) : view('survey.dashboard');
    }
}
