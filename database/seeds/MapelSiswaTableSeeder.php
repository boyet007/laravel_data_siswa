<?php

use Illuminate\Database\Seeder;


class MapelSiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapel_siswa')->insert(array(
            'siswa_id'  => 3,
            'mapel_id'  => 1,
            'nilai'     => 75
        ));

        DB::table('mapel_siswa')->insert(array(
            'siswa_id'  => 3,
            'mapel_id'  => 2,
            'nilai'     => 60
        ));        

        DB::table('mapel_siswa')->insert(array(
            'siswa_id'  => 4,
            'mapel_id'  => 1,
            'nilai'     => 50
        ));        

        DB::table('mapel_siswa')->insert(array(
            'siswa_id'  => 5,
            'mapel_id'  => 1,
            'nilai'     => 86
        ));        
    }
}
