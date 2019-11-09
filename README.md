laravel_data_mahasiswa
========================
command : 

bikin table siswa :
- php artisan make:migration create_siswa_table --create=siswa

bikin controller siswa : 
- php artisan make:controller SiswaController

bikin model siswa : 
- php artisan make:model Siswa

arahkan url ke folder public admin:
- href="{{ asset('admin') }}"

template Klorofil :
- https://www.themeineed.com/downloads/klorofil-free-bootstrap-admin-template/

integrasikan admin template :
- bikin folder admin di folder public
- taruh folder asset di folder admin
- icon cari di bagian icon semua ada
- copy table template -> inspect table yang diinginkan -> klik kanan -> copy -> copy element

edit edit content :
- jangan hapus section, cukup tambahkan 
    @section(content)
    @stop

- ganti content lama dengan :
    @section(content1)
    @endsection

- seteleah diupdate maka hapus section content 1


authentikasi :
- seting redirect failed login : D:\Latihan\laravel_data_siswa\app\Http\Middleware\Authenticate.php

middleware : setiap request yang datang akan di proses dulu di middleware sebelum dilempar ke controller

langkah-langkah membuat middleware :
- php artisan make:middleware CheckRole
- daftarkan middleware di kernel.php