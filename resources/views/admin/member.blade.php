@extends('admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Admin List</h4>
                                <p class="category">List admin yang aktif</p>
                                <a href="posting/add">
                                    <button class="btn btn-info btn-fill pull-right">Report </button>
                                </a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tgl. Lahir</th>
                                        <th>Alamat</th>
                                        <th>No. HP</th>
                                        <th>No. Tlp</th>
                                        <th>Action</th>
                                    </thead>
                                    @foreach($admin as $admin)
                                    <tbody>
                                        <tr>
                                            <td><?php $i=0; $i++; echo $i;?></td>
                                            <td>{{ $admin->id }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td>{{ $admin->jenis_kelamin }}</td>
                                            <td>{{ $admin->tanggal_lahir }}</td>
                                            <td>{{ $admin->alamat }}</td>
                                            <td>{{ $admin->no_hp }}</td>
                                            <td>{{ $admin->no_tlp }}</td>
                                            <td>
                                            <?php
                                            if (auth()->user()->roles=='admin') {
                                              echo"<a href='{{ url('posting/edit/'.$admin->id) }}''>
                                                    <i class='fa fa-pencil' aria-hidden='true'></i>
                                                </a>
                                                <a href='{{ url('posting/delete/'.$admin->id) }}' onclick='return confirm('Yakin Hapus ?')'>
                                                    <i class='fa fa-trash' aria-hidden='true'></i>
                                                </a>
                                                <a href='{{ url('posting/delete/'.$admin->id) }}' onclick='return confirm('Yakin Hapus ?')'>
                                                        <i class='fa fa-eye' aria-hidden='true'></i>
                                                </a>";
                                            }
                                            else{
                                                echo "<a href='{{ url('posting/delete/'.$admin->id) }}' onclick='return confirm('Yakin Hapus ?')'>
                                                        <i class='fa fa-eye' aria-hidden='true'></i>
                                                </a>";
                                                }
                                            ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Member List</h4>
                                <p class="category">Member yang mendaftar</p>
                                <a href="posting/add">
                                    <button class="btn btn-info btn-fill pull-right">Report </button>
                                </a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tgl. Lahir</th>
                                        <th>Alamat</th>
                                        <th>No. HP</th>
                                        <th>No. Tlp</th>
                                        <th>Action</th>
                                    </thead>
                                    @foreach($user as $user)
                                    <tbody>
                                        <tr>
                                            <td><?php $i=0; $i++; echo $i;?></td>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->jenis_kelamin }}</td>
                                            <td>{{ $user->tanggal_lahir }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->no_hp }}</td>
                                            <td>{{ $user->no_tlp }}</td>
                                            <td>
                                                <?php
                                            if (auth()->user()->roles=='admin') {
                                              echo"<a href='{{ url('posting/edit/'.$admin->id) }}''>
                                                    <i class='fa fa-pencil' aria-hidden='true'></i>
                                                </a>
                                                <a href='{{ url('posting/delete/'.$admin->id) }}' onclick='return confirm('Yakin Hapus ?')'>
                                                    <i class='fa fa-trash' aria-hidden='true'></i>
                                                </a>
                                                <a href='{{ url('posting/delete/'.$admin->id) }}' onclick='return confirm('Yakin Hapus ?')'>
                                                        <i class='fa fa-eye' aria-hidden='true'></i>
                                                </a>";
                                            }
                                            else{
                                                echo "<a href='{{ url('posting/delete/'.$admin->id) }}' onclick='return confirm('Yakin Hapus ?')'>
                                                        <i class='fa fa-eye' aria-hidden='true'></i>
                                                </a>";
                                                }
                                            ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                        

                </div>
            </div>
        </div>
@endsection
