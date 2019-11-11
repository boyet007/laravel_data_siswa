<?php

use Illuminate\Database\Seeder;
use App\Guru;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = new Guru;
        $guru->nama            = 'Bpk. Sujadmiko';
        $guru->telpon          = '021 9238 1929';
        $guru->alamat          = 'Bekasi';
        $guru->save();

        $guru = new Guru;
        $guru->nama            = 'Ibu Cintika';
        $guru->telpon          = '021 8876 1231';
        $guru->alamat          = 'Jakarta';
        $guru->save();
    }
}
