<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\AlasanBanner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $alasan = Alasan::all();
        $alasanBanner = AlasanBanner::all();
        return view('index', compact('alasan', 'alasanBanner'));
    }
}
