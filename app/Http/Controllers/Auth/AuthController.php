<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;
use Auth;
use PDF;
use Input;
use Carbon\Carbon;

class AuthController extends Controller {



	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct()
	{

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function getLogin()
	{
		return view('auth.login');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(['email'=>$email,'password'=>$password])) {
			if (Auth::user()->roles=='super admin') {	
				return redirect('dashboard');
			}

			else if (Auth::user()->roles=='admin') {
				return redirect('dashboard');
			}

			else if (Auth::user()->roles=='user') {
				return redirect('home');
			}
		}

		else{
			return 'Password salah';
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return redirect('/');
	}

	public function register()
	{
		$akun = new User;
		$akun->name = Input::get('name');
		$akun->email = Input::get('email');
		$akun->password = bcrypt(Input::get('password'));
		$akun->jabatan = Input::get('jabatan');
		$akun->jenis_kelamin = Input::get('jenis_kelamin');
		$akun->alamat = Input::get('alamat');
		$akun->no_tlp = Input::get('no_tlp');
		$akun->no_hp = Input::get('no_hp');
		$akun->status = Input::get('status');
		$akun->roles = Input::get('roles');
		if (Input::hasFile('p_profil')) {
		       	$file = Input::file('p_profil');
		       	$file->move(public_path(). '/', $file->getClientOriginalName());
		       	$akun->name = $file->getClientOriginalName();
		       }      

		$file = Input::file('p_profil');
					$namafile = round(microtime(true)).'.'.$file->getClientOriginalExtension();
					if(Input::hasFile('p_profil')){
						if($file->move('images/p_profil'.'/', $namafile)) {
							$akun->p_profil = $namafile;
						} else {
							return "error";
						}
					} 
		$akun->save();
		return redirect('auth/login');
	}
}
