<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Game;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $Siswa = DB::table('siswa')->get();
        $return = [
            'Siswa',
        ];
        return view('siswa', compact($return));
    }

    public function lihatnilai($id)
    {
        $siswa = \App\Models\Siswa::all()->where('id',$id);
        $game = \App\Models\Game::all();

        $return = [
            'siswa',
            'game',
        ];
        return view('lihatnilai', compact($return));

    }

    public function tambahsiswa()
    {
        return view('tambahsiswa');
    }

    public function addprosessiswa(Request $request)
    {
        $this->validate($request,[
            'nis' => 'required',
            'namasiswa' => 'required',
            'kelas' => 'required',
            'password' => 'required',
        ]);

        $query = DB::table('siswa')->insert([
            'nis'=>$request->input('nis'),
            'namasiswa'=>$request->input('namasiswa'),
            'kelas'=>$request->input('kelas'),
            'password'=>$request->input('password'),

        ]);

        if($query){

            return back()->with('success', 'Data berhasil ditambahkan');
         }else{
            return back()->with('fail', 'Data gagal ditambahkan');
         }
    }

    public function editsiswa($id)
    {

        $siswa = DB::table('siswa')->where('id',$id)->get();
        return view('editsiswa',['siswa'=>$siswa]);
    }

    public function editsiswaproses(Request $request)
    {

	    DB::table('siswa')->where('id',$request->id)->update([
            'nis'=>$request->nis,
            'namasiswa'=>$request->namasiswa,
            'kelas'=>$request->kelas,
            'password'=>$request->password
	]);

	    return redirect('/siswa');
    }

    public function hapussiswa($id)
    {
        DB::table('siswa')->where('id',$id)->delete();

	    return redirect('/siswa');
    }

};