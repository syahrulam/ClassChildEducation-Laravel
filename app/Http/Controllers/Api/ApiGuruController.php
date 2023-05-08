<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ApiGuruController extends Controller
{
    public function loginGuru(Request $request)
    {
        $input = $request->all();

        $validation = \Validator::make($input,[
            'nip' => 'required',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()],422);
        }
        if (Auth::guard('guru')->attempt(['nip' => $input['nip'],'password' => $input['password']])) {
            $user = Auth::guard('guru')->user();
            $token = $user->createToken('MyApp', ['guru'])->plainTextToken;
            return response()->json(['token' => $token]);

        }
    }
}
