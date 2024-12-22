<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\Berita;
use App\Models\AlasanBanner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $alasan = Alasan::all();
        $alasanBanner = AlasanBanner::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('alasan', 'alasanBanner', 'beritas'));
    }

    public function beritaDetail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita_detail', compact('berita'));
    }

    public function beritaLainnya()
    {
        $beritas = Berita::all();
        return view('berita_lainnya', compact('beritas'));
    }
}
