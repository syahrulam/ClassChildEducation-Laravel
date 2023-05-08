<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\DataKuis;

class ApiSoalController extends Controller
{
    public function index()
    {
        $kuis = DataKuis::all();
        return response()->json(['message' => 'Success','data' => $kuis]);
    }

    public function show($id)
    {
        $kuis = DataKuis::find($id);
        return response()->json(['message' => 'Success','data' => $kuis]);
    }

    public function store(Request $request)
    {
        $kuis = DataKuis::create($request->all());
        return response()->json(['message' => 'Success','data' => $kuis]);
    }

    public function update(Request $request, $id)
    {
        $kuis = DataKuis::find($id);
        $kuis->update($request->all());
        return response()->json(['message' => 'Success','data' => $kuis]);
    }

    public function destroy($id)
    {
        $kuis = DataKuis::find($id);
        $kuis->delete();
        return response()->json(['message' => 'Success','data' => null]);
    }
}
