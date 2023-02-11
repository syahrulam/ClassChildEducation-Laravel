<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Siswa;

class MonitorController extends Controller
{
    public function index()
    {
        $siswa = \App\Models\Siswa::all();
        $game = \App\Models\Game::all();

        $return = [
            'siswa',
            'game',
        ];
        return view('monitor', compact($return));
    }

    public function kategorigame()
    {
     
        $vargame = DB::table('game')->get();

        $return = [
            'vargame',
        ];
        return view('kategorigame', compact($return));
    }
}