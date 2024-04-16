<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $information_count = Information::count();

        return view('admin.dashboard', compact('information_count'));
    }
}
