<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ApiSiswaController extends Controller
{
    public function loginSiswa(Request $request)
    {
        $input = $request->all();

        $validation = \Validator::make($input,[
            'nis' => 'required',
            'password' => 'required',
        ]);
        
        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()],422);
        }
        if (Auth::guard('siswa')->attempt(['nis' => $input['nis'],'password' => $input['password']])) {
            $user = Auth::guard('siswa')->user();
            $token = $user->createToken('MyApp', ['siswa'])->plainTextToken;
            return response()->json(['token' => $token]);

        }
        
        // return Auth::guard('siswa')->attempt(['nis' => $input['nis'],'password' => $input['password']]);
    }

    public function siswaDetails()
    {
        $user = Auth::user();
        return response()->json(['data' => $user]);

    }


}
