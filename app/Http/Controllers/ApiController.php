<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Game_siswa;
use App\Models\Siswa;



class ApiController extends Controller
{
    public function index()
    {
        $gamesiswa = Game_siswa::all();
        return response()->json(['message' => 'Success','data' => $gamesiswa]);
    }

    public function show($id)
    {
        $gamesiswa = Game_siswa::find($id);
        return response()->json(['message' => 'Success','data' => $gamesiswa]);
    }

    public function store(Request $request)
    {
        $gamesiswa = Game_siswa::create($request->all());
        return response()->json(['message' => 'Success','data' => $gamesiswa]);
    }

    public function update(Request $request, $id)
    {
        $gamesiswa = Game_siswa::find($id);
        $gamesiswa->update($request->all());
        return response()->json(['message' => 'Success','data' => $gamesiswa]);
    }

    public function destroy($id)
    {
        $gamesiswa = Game_siswa::find($id);
        $gamesiswa->delete();
        return response()->json(['message' => 'Success','data' => null]);
    }
}
