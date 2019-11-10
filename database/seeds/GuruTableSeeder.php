<?php

use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->insert(array(
            'nama'      => 'Bpk Yohanes',
            'telpon'    => '021 920 1921',
            'alamat'     => 'Bekasi'
        ));   

        DB::table('guru')->insert(array(
            'nama'      => 'Ibu Dwi',
            'telpon'    => '021 921 1921',
            'alamat'     => 'Jakarta'
        ));   
    }
}
