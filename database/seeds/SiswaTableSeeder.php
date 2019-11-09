<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new Siswa;
        $siswa->user_id        = 2;
        $siswa->nama_depan      = 'Wynne';
        $siswa->nama_belakang   = 'Zong';
        $siswa->jenis_kelamin   = 'P';
        $siswa->agama           = 'Kristen';
        $siswa->alamat          = 'Jl Keadilan Glodok';
        $siswa->save();

        // $siswa = new Siswa;
        // $siswa->nama_depan      = 'Natalia';
        // $siswa->nama_belakang   = 'Renny';
        // $siswa->jenis_kelamin   = 'P';
        // $siswa->agama           = 'Katolik';
        // $siswa->alamat          = 'Jl Harapan Indah ';
        // $siswa->save();

        // $siswa = new Siswa;
        // $siswa->nama_depan      = 'Yanti';
        // $siswa->nama_belakang   = 'Kurnianty';
        // $siswa->jenis_kelamin   = 'P';
        // $siswa->agama           = 'Kristen';
        // $siswa->alamat          = 'Jl Tebet Timur';
        // $siswa->save();

        // $siswa = new Siswa;
        // $siswa->nama_depan      = 'RIta';
        // $siswa->nama_belakang   = 'Marlina';
        // $siswa->jenis_kelamin   = 'P';
        // $siswa->agama           = 'Kristen';
        // $siswa->alamat          = 'Jl Dago Raya Belakang';
        // $siswa->save();

        // $siswa = new Siswa;
        // $siswa->nama_depan      = 'Bambang';
        // $siswa->nama_belakang   = 'Suherman';
        // $siswa->jenis_kelamin   = 'L';
        // $siswa->agama           = 'Islam';
        // $siswa->alamat          = 'JL. Apel No. 5';
        // $siswa->save();
    }
}
