<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Alasan;
=======
>>>>>>> 419ecd480b7780f79e879656282cabb7ae4ca38c
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $alasan = Alasan::all();
        return view('index', compact('alasan'));
=======
        return view('index');
>>>>>>> 419ecd480b7780f79e879656282cabb7ae4ca38c
    }
}
