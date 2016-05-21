@extends('admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Post</h4>
                                <a href="posting/add">
                                    <button class="btn btn-info btn-fill pull-right">Create Posting </button>
                                </a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                        <th>Sampul</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Isi</th>
                                        <th>Tanggal</th>
                                        <th>Admin</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $posting)
                                        <tr>
                                            <td><?php $i=0; $i++; echo $i;?></td>
                                            <td><img style="width: 70px;height: auto;border-radius: 3px;"src="/images/posting/{{ $posting->sampul }}"></td>
                                            <td>{{ $posting->tittle }}</td>
                                            <td>{{ $posting->kategori }}</td>
                                            <td>{{ substr(preg_replace('/(<(\w+\b)[^>]*>)|(<\/(\w+\b)[^>]*>)/', '', $posting->isi),0,200) }}</td>
                                            <td>{{ $posting->tanggal }}/{{ $posting->bulan }}/{{ $posting->tahun }}</td>
                                            <td style="text-transform: capitalize;">{{ $posting->username }}</td>
                                            <td>
                                                <a href="{{ url('posting/edit/'.$posting->id) }}">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                            </form>
                                                <a href="{{ url('posting/delete/'.$posting->id) }}" onclick="return confirm('Yakin Hapus ?')">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
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
