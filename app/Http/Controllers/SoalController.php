<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\DataKuis;

class SoalController extends Controller
{
    public function index()
    {
        $dtKuis = \App\Models\DataKuis::all();

        $return = [
            'dtKuis',
        ];
        return view('soalkuis', compact($return));
    }

    public function tambahsoal()
    {
        return view('tambahsoal');
    }

    public function store(Request $request)
    {
        $datakuis = new DataKuis;
        $datakuis->soal = $request->input('soal');
        $datakuis->kategorigame_id = $request->input('kategorigame_id');
        $datakuis->a = $request->input('a');
        $datakuis->b = $request->input('b');
        $datakuis->c = $request->input('c');
        $datakuis->d = $request->input('d');
        $datakuis->jawaban = $request->input('jawaban');
        $datakuis->bobot_soal = $request->input('bobot_soal');

        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $path = $image->store('public/images');

        $datakuis->image_name = $name;
        $datakuis->image_path = $path;
        $datakuis->save();

        return redirect('/soal-kuis')->with('success', 'Soal berhasil disimpan.');
    }

    public function editsoal($id)
    {
        $datakuis = DB::table('data_kuis')->where('id',$id)->get();
        $return = [
            'datakuis',
        ];
        return view('editsoal', compact($return));
    }

    public function update(Request $request, $id)
    {
        $datakuis = DataKuis::findOrFail($id);

        $datakuis->soal = $request->input('soal');
        $datakuis->kategorigame_id = $request->input('kategorigame_id');
        $datakuis->a = $request->input('a');
        $datakuis->b = $request->input('b');
        $datakuis->c = $request->input('c');
        $datakuis->d = $request->input('d');
        $datakuis->jawaban = $request->input('jawaban');
        $datakuis->bobot_soal = $request->input('bobot_soal');

        if ($request->hasFile('image')) {
            // Hapus file lama
            Storage::delete($datakuis->image);

            // Upload file baru
            $file = $request->file('image');
            $path = $file->store('public/images');

            $datakuis->image = $path;
        }

        $datakuis->save();

        return redirect()->route('soal-kuis')->with('success', 'Soal berhasil diperbarui.');
    }

    // public function editsoalproses(Request $request)
    // {

	//     DB::table('data_kuis')->where('id',$request->id)->update([
    //         'soal'=>$request->soal,
    //         'kategorigame_id'=>$request->kategorigame_id,
    //         'a'=>$request->a,
    //         'b'=>$request->b,
    //         'c'=>$request->c,
    //         'd'=>$request->d,
    //         'jawaban'=>$request->jawaban,
    //         'bobot_soal'=>$request->bobot_soal,
    //         'image'=>$request->image,
	// ]);

	//     return redirect('/soal-kuis');
    // }

    public function hapussoal($id)
    {
        DB::table('data_kuis')->where('id',$id)->delete();

	    return redirect('/soal-kuis');
    }
}
