<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $alasan = Alasan::all();
        return view('index', compact('alasan'));
    }
}
