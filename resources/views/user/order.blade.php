@extends('user/app_user')
@section('store')
<section id="form">
		<div class="form-content">					
					<div id="form-section">
							<h3>Send a message</h3>
					    	<div class="status alert alert-success"></div>
					    	<form action="{{ url('/home/save/') }}" id="main-form-form" class="form-form" name="contact-form" method="post">
					            <div class="form-group">
					                <input type="text" name="nama_lengkap" class="form-control" required="required" placeholder="Name">
					                <input type="hidden" name="_token" value="{{ csrf_token() }}">
					            </div>
					            <div class="form-group">
					                <input type="text" name="jabatan" class="form-control" required="required" placeholder="Jabatan">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <input type="text" name="instansi" class="form-control" required="required" placeholder="Instansi">
					            </div>
					            <div class="form-group">
					                <input type="text" name="jenis_instansi" class="form-control" required="required" placeholder="Jenis Instansi">
					            </div>
					            <div class="form-group">
					                <textarea name="alamat" id="message" required="required" class="form-control" rows="4" placeholder="Alamat"></textarea>
					            </div>                        
					            <div class="form-group">
					                <input type="text" name="fax" class="form-control" required="required" placeholder="No. Fax">
					            </div>
					            <div class="form-group">
					                <input type="text" name="no_tlp" class="form-control" required="required" placeholder="No. Tlp">
					            </div>
					            <div class="form-group">
					                <input type="text" name="no_hp" class="form-control" required="required" placeholder="No. Hp">
					            </div>
					            <div class="form-group">
					                <input type="text" name="jenis_pesan" class="form-control" required="required" placeholder="Jenis Pesanan">
					            </div>
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
				
		</div>
	</section>
</html>
@endsection