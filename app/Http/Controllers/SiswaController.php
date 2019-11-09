<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all());
        if ($request ->has('cari')) {
            $data_siswa = Siswa::where('nama_depan', 'LIKE', '%' .$request->cari. '%')->get();
        } else {
            $data_siswa = Siswa::All();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request) 
    {
        Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id) 
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id) 
    {
        $siswa = Siswa::destroy($id);
        return redirect('/siswa')->with('sukses', 'Data berhasil dihapus');
    }
}
