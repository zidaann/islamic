<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlquranController extends Controller
{
    public function index(){
        $response = Http::get('https://equran.id/api/surat');
        $datas = $response->json();
        return view('quran.index', compact('datas'));
    }
}
