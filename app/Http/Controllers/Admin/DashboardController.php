<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return auth()->user()->is_admin ? view('admin.dashboard') : view('survey.dashboard');
    }
}
