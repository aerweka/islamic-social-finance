<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Question\Question;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([]);

        Question::store($request->all());

        // return Alert::;
    }
}
