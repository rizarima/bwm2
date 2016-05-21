<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order as post;
use App\post as posting;
use App\Accepted_client as aclient;

use App;
use Illuminate\Support\Facades\Input;
use PDF;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$data = array('data'=>posting::all());
		return view('home')->with($data);
	}

	public function NotFound()
	{
		return view('404');
	}

	public function store()
	{
		return view('user.order');
	}

	public function storeSave()
	{
		$post = new post;
		$post->nama_lengkap = Input::get('nama_lengkap');
		$post->jabatan = Input::get('jabatan');
		$post->email = Input::get('email');
		$post->instansi = Input::get('instansi');
		$post->jenis_instansi = Input::get('jenis_instansi');
		$post->alamat = Input::get('alamat');
		$post->fax = Input::get('fax');
		$post->no_tlp = Input::get('no_tlp');
		$post->no_hp = Input::get('no_hp');
		$post->jenis_pesan = Input::get('jenis_pesan');
		// $post->slug = str_slug(Input::get('judul'));

		// if(Input::hasFile('sampul')){
		// 	$sampul = date("YmdHis");
		// 	uniqid().".".Input::file('sampul')->getClientOriginalExtension();

		// 	Input::file('sampul')->move(storage_path(),$sampul);
		// 	$post->sampul = $sampul;
		// }
		$post->save();
		return redirect(url('home'));
		}

	// public function acceptOrder($id)
	// {
	// 	$data = array('data'=>post::all());
	// 	return view('admin.client')->with($data);
	// }

	public function acceptOrder($id)
	{
		$aclient['order'] = \App\order::find($id);
		$aclient['acc'] = \App\order::find($id);
		$aclient->nama_lengkap = Input::get('nama_lengkap');
		$aclient->email = Input::get('email');
		$aclient->jabatan = Input::get('jabatan');		
		$aclient->instansi = Input::get('instansi');
		$aclient->jenis_instansi = Input::get('jenis_instansi');
		$aclient->alamat = Input::get('alamat');
		$aclient->no_tlp = Input::get('no_tlp');
		$aclient->no_hp = Input::get('no_hp');
		$aclient->save();

		post::find($aclient->id)->delete();

		return redirect(url('admin.client'));
	}

	public function declineOrder($id){
		post::find($id)->delete();
		return redirect(url('admin.order'));
	}
}