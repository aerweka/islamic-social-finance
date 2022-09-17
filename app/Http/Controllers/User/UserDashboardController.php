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

        
        return view('user.dashboard', compact('answer','cek_mengisi'));
    }
}
