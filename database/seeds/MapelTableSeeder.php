<?php

use Illuminate\Database\Seeder;
use App\Mapel;


class MapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel = new Mapel;
        $mapel->kode            = 'M-001';
        $mapel->nama            = 'Matematika Dasar';
        $mapel->semester        = 'ganjil';
        $mapel->save();

        $mapel = new Mapel;
        $mapel->kode            = 'B-001';
        $mapel->nama            = 'Bahasa Indonesia';
        $mapel->semester        = 'ganjil';
        $mapel->save();
    }
}
