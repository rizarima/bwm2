@extends('admin')
@section('content')
<style type="text/css">
    /* File Input
   ========================================================================== */
.file-field {
  position: relative;
}

.file-field .file-path-wrapper {
  overflow: hidden;
  padding-left: 10px;
}

.file-field input.file-path {
  width: 100%;
}

.file-field .btn, .file-field .btn-large {
  float: left;
  height: 3rem;
  line-height: 3rem;
}

.file-field span {
  cursor: pointer;
}

.file-field input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
</style>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Profile</h4>
                            </div>
                            <div class="content">
                                <form action="{{ url('profile/update')}}" method="post" role="form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input name="name" type="text" class="form-control" placeholder="Nama" value="{{ $data->name }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Username" value="{{ $data->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jabatan</label>
                                                <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="{{ $data->jabatan }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{ $data->alamat }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" style="width:50%">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control">
                                                @if ($data->jenis_kelamin = 'laki-laki')
                                                    <option value="{{ $data->jenis_kelamin }}">{{ $data->jenis_kelamin }}</option>
                                                    <option value="perempuan">Perempuan</option>
                                                @else
                                                    <option value="{{ $data->jenis_kelamin }}">{{ $data->jenis_kelamin }}</option>
                                                    <option value="laki-laki">Laki-laki</option>
                                                @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="width:50%">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input name="alamat" type="text" class="form-control" placeholder="Tanggal Lahir" value="{{ $data->tanggal_lahir }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No. Tlp</label>
                                                <input name="no_tlp" type="text" class="form-control" placeholder="No.Tlp" value="{{ $data->no_tlp }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No. Hp</label>
                                                <input type="text" name="no_hp" class="form-control" placeholder="No. HP" value="{{ $data->no_hp }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No. Fax</label>
                                                <input type="text" name="no_fax" class="form-control" placeholder="ZIP Code" value="{{ $data->no_fax }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="kota" class="form-control" placeholder="City" value="{{ $data->kota }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="negara" class="form-control" placeholder="Country" value="{{ $data->negara }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input name="kode_pos" type="number" class="form-control" placeholder="ZIP Code" value="{{ $data->kode_pos }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description">{{ $data->about }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="{{ url('images/Admin/faces/face-3.jpg')}}" alt="..."/>

                                      <h4 class="title" style="text-transform: capitalize">{{Auth::user()->name}}<br/></h4>
                                      <h4 class="title">
                                         <small>{{Auth::user()->email}}</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> 
                                    "{{ Auth::user()->about}}"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Photos</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row" style="padding:12px;">
                                        <div class="row">
                                           <div class="col-md-12">
                                           <form action="{{ url('profile/p_profil')}}" method="post" role="form" enctype="multipart/form-data">
                                                <label>Profile Picture</label>
                                                <input type="file" name="p_profile"
                                                style="border:1px solid #e5e5e5; width: 100%;padding: 5px;border-radius: 3px;">
                                            </form>
                                           </div>
                                        </div>
                                        <div class="row">
                                        <form action="{{ url('profile/p_background')}}" method="post" role="form" enctype="multipart/form-data">
                                           <div class="col-md-12">
                                                <label>Profile Picture</label>
                                                <input type="file" name="p_background" style="border: 1px solid #e5e5e5; width: 100%;padding: 5px;border-radius: 3px;">
                                           </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection