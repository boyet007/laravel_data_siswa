<?php
    use App\Siswa;
    use App\Guru;

    function ranking3Besar() 
    {
        $siswa = Siswa::all();
        
        //mappoing banyak siswa ke 1 siswa
        //tambahkan atribut nilaiRata
        $siswa->map(function($s){
            $s->nilaiRata = $s->nilaiRata();
        });

        $siswa = $siswa->sortByDesc('nilaiRata')->take(3);
        return $siswa;
    }

    function totalSiswa()
    {
        return Siswa::count();
    }

    function totalGuru() 
    {
        return Guru::count();
    }
?>