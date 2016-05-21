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
                    <div class="col-md-8" style="width: 100%">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Posting</h4>
                            </div>
                            <div class="content">
                                <form action="{{ url('posting/save')}}" method="post" role="form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tittle</label>
                                                <input name="tittle" type="text" class="form-control">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Sampul</label>
                                            <input name="sampul" type="file" style="border: 1px solid #e5e5e5; width: 100%;padding: 5px;border-radius: 3px;">
                                        </div>
                                        <div class="col-md-4" style="width: 66%">
                                            <label>Kategori</label>
                                            <input name="kategori" type="text" class="form-control">
                                            <?php
                                            $date = Carbon::now()->format('d');
                                            $month = Carbon::now()->format('m');
                                            $year = Carbon::now()->format('Y');
                                            echo "
                                            <input name='tanggal' type='hidden' class='form-control' value='$date'>
                                            <input name='bulan' type='hidden' class='form-control' value='$month'>
                                            <input name='tahun' type='hidden' class='form-control' value='$year'>"
                                            ?>
                                            <input name="id_user" type="hidden" class="form-control" value="{{Auth::user()->id}}">
                                            <input name="username" type="hidden" class="form-control" value="{{Auth::user()->name}}" style="text-transform: capitalize;">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Contain Posting</label>
                                                <textarea rows="5" id="messageArea" name="isi" rows="7" class="form-control ckeditor"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="//cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>
        <script src="{{ url('js/ckeditor/ckeditor.js')}}"></script>
@endsection