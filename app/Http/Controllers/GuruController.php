<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function Profile($id) 
    {
        $guru = Guru::find($id);
        return view('guru.profile', ['guru' => $guru]);
    }
}
