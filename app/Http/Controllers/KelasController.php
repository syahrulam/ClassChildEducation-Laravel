<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('users')->paginate();
        $siswa = Siswa::count();

        $return = [
            'kelas',
            'siswa',
        ];
        return view('kelas', compact($return));
    }

        public function tambahkelas()
    {
        $pilihSiswa = \App\Models\Siswa::all();
        $pilihWali = \App\Models\User::all();

        $return = [
            'pilihSiswa',
            'pilihWali',
        ];
        return view('tambahkelas', compact($return));
    }

    public function addproseskelas(Request $request)
    {
        $this->validate($request,[
            'namakelas' => 'required',
            'users_id' => 'required',
        ]);

        $query = DB::table('kelas')->insert([
            'namakelas'=>$request->input('namakelas'),
            'users_id'=>$request->input('users_id'),
        
        ]);

        if($query){

            return back()->with('success', 'Data berhasil ditambahkan');
         }else{
            return back()->with('fail', 'Data gagal ditambahkan');
         }
    }

    public function editkelas($id)
    {
        $siswa = Kelas::with('siswaa')->paginate();

        $kelas = DB::table('kelas')->where('id',$id)->get();
        $return = [
            'siswa',
            'kelas',
        ];
        return view('editkelas', compact($return));
    }

    public function editkelasproses(Request $request)
    {

	    DB::table('kelas')->where('id',$request->id)->update([
            'namakelas'=>$request->namakelas,
            'users_id'=>$request->users_id,
	]);

	    return redirect('/kelas');
    }

    public function hapuskelas($id)
    {
        DB::table('kelas')->where('id',$id)->delete();

	    return redirect('/kelas');
    }

}
