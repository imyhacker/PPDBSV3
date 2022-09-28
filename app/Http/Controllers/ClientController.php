<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Slider;
use App\Models\Tentang;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $slide = Slider::all();
        $tentang = Tentang::first();
        $info = Informasi::orderBy('id', 'DESC')->limit(6)->get();
        return view('Client/index', compact(
            'slide',
            'tentang',
            'info'
        ));
    }
}
