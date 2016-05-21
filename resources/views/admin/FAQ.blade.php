@extends('admin')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">FAQ List</h4>
                                <p class="category">Pertanyaan seputar pelatihan</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>No.</th>
                                      <th>ID</th>
                                      <th>Username</th>
                                      <th>Email</th>
                                      <th>Subject</th>
                                      <th>Isi</th>
                                      <th>Tanggal</th>
                                      <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $faq)
                                        <tr>
                                          <td><?php $i=0; $i++; echo $i;?></td>
                                          <td>{{ $faq->id }}</td>
                                          <td>{{ $faq->username }}</td>
                                          <td>{{ $faq->email }}</td>
                                          <td>{{ $faq->subject }}</td>
                                          <td>{{ $faq->isi }}</td>
                                          <td>{{ $faq->created_at }}</td>
                                          <td>
                                            <a href="{{ url('admin/edit/'.$faq->id) }}">Edit</a>
                                            <a href="{{ url('order/delete/'.$faq->id) }}" onclick="return confirm('Yakin Hapus ?')">Delete</a>
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
