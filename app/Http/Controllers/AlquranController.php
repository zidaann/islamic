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

    public function show($nomor){
        $response = Http::get('https://equran.id/api/surat/'.$nomor);
        $datas = $response->json();
        // dd($datas);
        return view('quran.show', compact('datas'));
    }
}
