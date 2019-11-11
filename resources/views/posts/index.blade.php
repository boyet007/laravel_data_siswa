@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Posts</h3>
                                <div class="right">
                                    <button type="button" data-toggle="modal" 
                                        data-target="#exampleModal" class="btn">Add new post</button>
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TITLE</th>
                                            <th>USER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->user->name }}</td>
                                            <td>
                                                <a target="_blank" href="{{ route('site.single.post', $post->slug) }}" class="btn btn-info btn-small">View</a>
                                                <a href="#" class="btn btn-warning btn-small">Edit</a>
                                                <a href="#" class="btn btn-danger btn-small delete">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END TABLE HOVER -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $('.delete').click(function() {
            //this mengacu pada tombol class delete
            var siswa_id = $(this).attr('siswa-id')
            swal({
                title: 'Konfirmasi ?',
                text: 'Mau dihapus data siswa dengan id ' + siswa_id + '?',
                icon: 'warning',
                buttons: true,
                dangerMode: true
            }).then((willDelete) => {
                if (willDelete) {
                    //arahkan kemana
                    window.location = '/siswa/' + siswa_id + '/delete'
                } 
            })
        });
        
    </script>
@endsection




