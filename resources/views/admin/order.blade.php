@extends('admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Order List</h4>
                                <p class="category">Pemesanan jasa pelatihan</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                    	<th>ID</th>
                                    	<th>Nama</th>
                                    	<th>Jabatan</th>
                                    	<th>Instansi</th>
                                        <th>Jenis Instansi</th>
                                        <th>No. HP</th>
                                        <th>No. Tlp</th>
                                        <th>Jenis Pesan</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $post)
                                        <tr>
                                        	<td><?php $i=0; $i++; echo $i;?></td>
                                            <form action="{{ url('admin/accept/{id}') }}" method="post">
                                        	<td name="id">{{ $post->id }}</td>
                                        	<td name="nama_lengkap">{{ $post->nama_lengkap }}</td>
                                        	<td name="jabatan">{{ $post->jabatan }}</td>
                                        	<td name="instansi">{{ $post->instansi }}</td>
                                            <td name="jenis_instansi">{{ $post->jenis_instansi }}</td>
                                            <td name="no_hp">{{ $post->no_hp }}</td>
                                            <td name="no_tlp">{{ $post->no_tlp }}</td>
                                            <td name="jenis_pesan">{{ $post->jenis_pesan }}</td>
                                            <td>
                                                <a href="{{ url('admin/accept/'.$post->id) }}">Accept</a>
                                            </form>
                                                <a href="{{ url('admin/decline/'.$post->id) }}" onclick="return confirm('Yakin Hapus ?')">Decline</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>
@endsection
