<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Game;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('kelas')->paginate();

        $return = [
            'siswa',
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
        $kelas = Siswa::with('kelas')->paginate();

        $return = [
            'kelas',
        ];
        return view('tambahsiswa', compact($return));
    }

    public function addprosessiswa(Request $request)
    {
        $this->validate($request,[
            'nis' => 'required',
            'namasiswa' => 'required',
            'kelas_id' => 'required',
            'tahunakademik' => 'required',
            'password' => 'required',
        ]);

        $query = DB::table('siswa')->insert([
            'nis'=>$request->input('nis'),
            'namasiswa'=>$request->input('namasiswa'),
            'kelas_id'=>$request->input('kelas_id'),
            'tahunakademik'=>$request->input('tahunakademik'),
            'password'=> Hash::make($request->password)
            

        ]);

        if($query){

            return back()->with('success', 'Data berhasil ditambahkan');
         }else{
            return back()->with('fail', 'Data gagal ditambahkan');
         }
    }

    public function editsiswa($id)
    {
        $kelas = Siswa::with('kelas')->paginate();

        $siswa = DB::table('siswa')->where('id',$id)->get();
        $return = [
            'kelas',
            'siswa',
        ];
        return view('editsiswa', compact($return));
    }

    public function editsiswaproses(Request $request)
    {

	    DB::table('siswa')->where('id',$request->id)->update([
            'nis'=>$request->nis,
            'namasiswa'=>$request->namasiswa,
            'kelas_id'=>$request->kelas_id,
            'password'=> Hash::make($request->password)
	]);

	    return redirect('/siswa');
    }

    public function hapussiswa($id)
    {
        DB::table('siswa')->where('id',$id)->delete();

	    return redirect('/siswa');
    }

};