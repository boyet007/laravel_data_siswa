@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Inputs</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/siswa/{{ $siswa->id }}/update" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Depan</label>
                                        <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" 
                                            aria-describedby="emailHelp" value="{{ $siswa->nama_depan }}" placeholder="Nama Depan">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Belakang</label>
                                        <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" 
                                            aria-describedby="emailHelp" value="{{ $siswa->nama_belakang }}" placeholder="Nama Belakang">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" 
                                            id="exampleFormControlSelect1">
                                            <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                            <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Agama</label>
                                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" 
                                            aria-describedby="emailHelp" value="{{ $siswa->agama }}" placeholder="Agama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea name="alamat" class="form-control" 
                                            id="exampleFormControlTextarea1" rows="3">{{ $siswa->alamat }}</textarea>
                                    </div>  
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Avatar</label>
                                        <input type="file" name="avatar" class="form-control" id="exampleInputEmail1" 
                                            aria-describedby="emailHelp" placeholder="Nama Depan">
                                    </div>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('content1')
    <h1>Edit data siswa</h1>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
          
        </div>
    </div>
@endsection

      
      
