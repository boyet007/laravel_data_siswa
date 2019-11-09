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


php artisan tinker
===================
- mencari siswa tertentu :
$siswa=App\Siswa::find(3)
=> App\Siswa {#3011
     id: 3,
     user_id: 4,
     nama_depan: "Yanti",
     nama_belakang: "Kurnianty",
     jenis_kelamin: "P",
     agama: "Kristen",
     alamat: "Jl Tebet Timur",
     avatar: null,
     created_at: "2019-11-09 17:45:53",
     updated_at: "2019-11-09 17:45:53",
   }

- mencari nilai siswa id 3 :
$siswa->mapel
=> Illuminate\Database\Eloquent\Collection {#3016
     all: [
       App\Mapel {#3003
         id: 1,
         kode: "M-001",
         nama: "Matematika Dasar",
         semester: "ganjil",
         created_at: "2019-11-09 17:45:53",
         updated_at: "2019-11-09 17:45:53",
         pivot: Illuminate\Database\Eloquent\Relations\Pivot {#3022
           siswa_id: 3,
           mapel_id: 1,
         },
       },
       App\Mapel {#3006
         id: 2,
         kode: "B-001",
         nama: "Bahasa Indonesia",
         semester: "ganjil",
         created_at: "2019-11-09 17:45:53",
         updated_at: "2019-11-09 17:45:53",
         pivot: Illuminate\Database\Eloquent\Relations\Pivot {#3015
           siswa_id: 3,
           mapel_id: 2,
         },
       },
       App\Mapel {#3023
         id: 2,
         kode: "B-001",
         nama: "Bahasa Indonesia",
         semester: "ganjil",
         created_at: "2019-11-09 17:45:53",
         updated_at: "2019-11-09 17:45:53",
         pivot: Illuminate\Database\Eloquent\Relations\Pivot {#3017
           siswa_id: 3,
           mapel_id: 2,
         },
       },
     ],
   }

- mencari mapel id 1 :
>>> $mapel = App\Mapel::find(1)
=> App\Mapel {#3011
     id: 1,
     kode: "M-001",
     nama: "Matematika Dasar",
     semester: "ganjil",
     created_at: "2019-11-09 17:45:53",
     updated_at: "2019-11-09 17:45:53",
   }

- mencari siswa yang ikutin pelajaran 1 :
>>> $mapel->siswa
=> Illuminate\Database\Eloquent\Collection {#3012
     all: [
       App\Siswa {#3015
         id: 3,
         user_id: 4,
         nama_depan: "Yanti",
         nama_belakang: "Kurnianty",
         jenis_kelamin: "P",
         agama: "Kristen",
         alamat: "Jl Tebet Timur",
         avatar: null,
         created_at: "2019-11-09 17:45:53",
         updated_at: "2019-11-09 17:45:53",
         pivot: Illuminate\Database\Eloquent\Relations\Pivot {#3013
           mapel_id: 1,
           siswa_id: 3,
         },
       },
     ],
   }







