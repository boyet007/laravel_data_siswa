<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_depan', 'nama_belakang', 'user_id',
        'jenis_kelamin', 'agama', 'alamat', 'avatar'];

        public function getAvatar()
        {
            //kalau avatar gak ada dikasih gambar default
            if(!$this->avatar) {
                return asset('images/default.jpg');
            }

            return asset('images/' . $this->avatar);
        }

        public function mapel() 
        {
            return $this->belongsToMany(Mapel::class)->withPivot(['nilai']);
        }

}
