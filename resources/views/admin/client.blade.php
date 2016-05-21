@extends('admin')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Accepted Client List</h4>
                                <p class="category">Client for the next Trainning</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jabatan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tgl. Lahir</th>
                                        <th>Alamat</th>
                                        <th>No. HP</th>
                                        <th>No. Tlp</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php $i=0; $i++; echo $i;?></td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
