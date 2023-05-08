<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class GuruController extends Controller
{
    public function index()
    {

        $guru = DB::table('users')->get();
        $return = [
            'guru',
        ];
        return view('guru', compact($return));
    }

    public function lihatnilai($id)
    {
        $guru = DB::table('users')->where('id',$id)->get();
        return view('monitor',['guru'=>$guru]);
    }

    public function tambahguru()
    {
        return view('tambahguru');
    }

    public function addprosesguru(Request $request)
    {
        $this->validate($request,[
            'nip' => 'required',
            'name' => 'required',
            'email' => 'required',
            'admin_akses' => 'required',
            'password' => 'required',
        ]);

        $query = DB::table('users')->insert([
            'nip'=>$request->input('nip'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'admin_akses'=>$request->input('admin_akses'),
            'password'=> Hash::make($request->password)

        ]);

        if($query){

            return back()->with('success', 'Data berhasil ditambahkan');
         }else{
            return back()->with('fail', 'Data gagal ditambahkan');
         }
    }

    public function editguru($id)
    {

        $users = DB::table('users')->where('id',$id)->get();
        return view('editguru',['users'=>$users]);
    }

    public function editguruproses(Request $request)
    {

	    DB::table('users')->where('id',$request->id)->update([
            'nip'=>$request->nip,
            'name'=>$request->name,
            'admin_akses'=>$request->admin_akses,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
	]);

	    return redirect('/guru');
    }

    public function hapusguru($id)
    {
        DB::table('users')->where('id',$id)->delete();

	    return redirect('/guru');
    }

};