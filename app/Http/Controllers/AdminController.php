<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\order as post;
use App\FAQ as faq;
use App\User as user;
use App\post as posting;
use Illuminate\Http\Request;
use Input;

class AdminController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			$data = array('data'=>post::all());
			return view('admin.dashboard')->with($data);
		}

		return view('NotFound');
	}
	
	public function create()
	{
		if (User::admin()) {
			return 'You are not authorized';
		}

		//
	}

	public function FAQ()
	{
	if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			$data = array('data'=>faq::all());
			return view('admin.FAQ')->with($data);
		}
	return view('NotFound');
	}

	public function client()
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			return view('admin.client');
		}
	return view('NotFound');
	}

	public function order()
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			$data = array('data'=>post::all());
			return view('admin.order')->with($data);
		}
		return view('NotFound');
	}

	public function profile($id)
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			$data = array('data'=>user::find($id));
			return view('admin.profile')->with($data);
		}
		return view('NotFound');	
	}

	public function profileUpdate()
	{
			if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
					$user = user::find(Input::get('id'));
					$user->name = Input::get('name');
					$user->email = Input::get('email');
					$user->jabatan = Input::get('jabatan');
					$user->jenis_kelamin = Input::get('jenis_kelamin');
					$user->tanggal_lahir = Input::get('tanggal_lahir');
					$user->alamat = Input::get('alamat');
					$user->no_tlp = Input::get('no_tlp');
					$user->no_hp = Input::get('no_hp');
					$user->no_fax = Input::get('no_fax');
					$user->kota = Input::get('kota');
					$user->negara = Input::get('negara');
					$user->kode_pos = Input::get('kode_pos');
					$user->about = Input::get('about');
					
					$user->save();
					return redirect(url('posting'));
		}		
		return view('NotFound');
	}

	public function p_profile()
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
					$user = user::find(Input::get('remember_token'));
					$file = Input::file('p_profile');
					$namafile = round(microtime(true)).'.'.$file->getClientOriginalExtension();
					if(Input::hasFile('sampul')){
						if($file->move('images/posting'.'/', $namafile)) {
							$posting->sampul = $namafile;
						} else {
							return "error";
						}
					}
					
			$posting->save();
		}
		return view('NotFound');	
	}

	public function p_background()
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			return view('admin.profile');
		}
		return view('NotFound');	
	}

	public function member()
	{
		if (auth()->user()->roles=='super admin') {
			$admin = array('admin'=>user::where('roles', '=', 'admin')->paginate(10));	
			$user = array('user'=>user::where('roles', '=', 'user')->paginate(10));	
			return view('admin.member')->with($admin)->with($user);
		}
		return view('NotFound');	
	}

	public function posting()
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			$data = array('data'=>posting::all());
			return view('admin.posting')->with($data);
		}		
		return view('NotFound');
	}

	public function createPost()
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			return view('admin.posting.create');
		}		
		return view('NotFound');
	}

	public function PostingSave()
	{
			if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
					$posting = new posting;
					$posting->id_user = Input::get('id_user');
					$posting->tittle = Input::get('tittle');
					$posting->isi = Input::get('isi');
					$posting->tanggal = Input::get('tanggal');
					$posting->bulan = Input::get('bulan');
					$posting->tahun = Input::get('tahun');
					$posting->kategori = Input::get('kategori');
					$posting->username = Input::get('username');
					
					$file = Input::file('sampul');
					$namafile = round(microtime(true)).'.'.$file->getClientOriginalExtension();
					if(Input::hasFile('sampul')){
						if($file->move('images/posting'.'/', $namafile)) {
							$posting->sampul = $namafile;
						} else {
							return "error";
						}
					}
					
					$posting->save();
					return redirect(url('posting'));
		}		
		return view('NotFound');
	}

	public function editPost($id)
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			$data = array('data'=>posting::find($id));
			return view('admin.posting.edit')->with($data);
		}		
		return view('NotFound');
	}

	public function updatePost()
	{
			if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
					$posting = posting::find(Input::get('id'));
					$posting->id_user = Input::get('id_user');
					$posting->tittle = Input::get('tittle');
					$posting->isi = Input::get('isi');
					$posting->tanggal = Input::get('tanggal');
					$posting->bulan = Input::get('bulan');
					$posting->tahun = Input::get('tahun');
					$posting->kategori = Input::get('kategori');
					$posting->username = Input::get('username');
					
					$file = Input::file('sampul');
					$namafile = round(microtime(true)).'.'.$file->getClientOriginalExtension();
					if(Input::hasFile('sampul')){
						if($file->move('images/posting'.'/', $namafile)) {
							$posting->sampul = $namafile;
						} else {
							return "error";
						}
					}
					
					$posting->save();
					return redirect(url('posting'));
		}		
		return view('NotFound');
	}

	public function destroyPost($id)
	{
		if (auth()->user()->roles=='admin'||auth()->user()->roles=='super admin') {
			posting::find($id)->delete();
			$data = array('data'=>posting::all());
			return view('admin.posting')->with($data);
		}		
		return view('NotFound');
	}
}
