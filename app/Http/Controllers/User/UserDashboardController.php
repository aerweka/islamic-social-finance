<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\M_answer;

class UserDashboardController extends Controller
{
    public function __invoke(Request $req)
    {
        $user_id = Auth()->user()->id;
        $answer = M_answer::where('id',$user_id)->orderBy('filled_at', 'DESC')->get();
        // $cek_mengisi = $answer->where('filled_at',Carbon::now()->year)->count();
        $cek_mengisi = DB::table('answer')
        ->where('id', $user_id)
        ->whereYear('filled_at',Carbon::now()->year)->count();

        // dd($cek_mengisi);

        
        return view('user.dashboard', compact('answer','cek_mengisi'));
    }
}
