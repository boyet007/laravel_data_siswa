<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use App\Mapel;
use Illuminate\Support\Str;

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
        // $request->request->add(['user_id' => 2]);
        //dd($request->all());

        //validate
        $this->validate($request, [
            'nama_depan'    => 'required|min:5',
            'nama_belakang' => 'required|min:5',
            //email harus unique ditable user
            'email'         => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'agama'         => 'required',
            'alamat'        => 'required',
            'avatar'        => 'mimes:jpeg,png'
        ]);

        //Insert ke table User
        $user = new User;
        $user->role = 'user';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token =  Str::random(60);
        $user->save();

        //Insert ke table Siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());

        if($request->hasFile('avatar')) {
            //memindahkan request file avatar ke folder public dengan original name yang kita upload
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar =  $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }

        return redirect('/siswa')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }

public function update(Request $request, $id) 
    {
        //dd($request->all());
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        if($request->hasFile('avatar')) {
            //memindahkan request file avatar ke folder public dengan original name yang kita upload
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar =  $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id) 
    {
        $siswa = Siswa::destroy($id);
        return redirect('/siswa')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile($id)
    {
        $siswa = Siswa::find($id);
        $matapelajaran = Mapel::all();
        //dd($mapel);

        // Menyiapkan data untuk chart
        $categories = [];

        // Menyiapkan data untuk nilai
        $data = [];

        foreach($matapelajaran as $mp) {
            if($siswa->mapel()->wherePivot('mapel_id', $mp->id)->first()) {
                $categories[] = $mp->nama;
                //ga pake () jadi collection
               //pake () jadi query builder
                $data[] = $siswa->mapel()->wherePivot('mapel_id', $mp->id)->first()->pivot->nilai;
            }
        }

         //dd($data);
        // dd($categories);
        return view('siswa.profile', [
            'siswa' => $siswa,
            'matapelajaran' => $matapelajaran,
            'categories'=> $categories,
            'data' => $data
        ]);
    }

    public function addnilai(Request $request, $idsiswa) 
    {
        //dd($idsiswa);
       $siswa = Siswa::find($idsiswa);
       
       //validasi untuk mata pelajaran yang sudah ada
       if ($siswa->mapel()->where('mapel_id', $request->mapel)->exists()) {
           return redirect('siswa/' .$idsiswa . '/profile')->with('error', 'Data mata pelajaran sudah ada');
        }
       //menambahkan kedalam pivot table
       $siswa->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);
       return redirect('siswa/' .$idsiswa . '/profile')->with('sukses', 'Data nilai berhasil dimasukkan');
    }

    public function deletenilai($idsiswa, $idmapel) {
        $siswa = Siswa::find($idsiswa);
        $siswa->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data nilai berhasil dihapus');
    }
}
